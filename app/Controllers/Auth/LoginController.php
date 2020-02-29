<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class LoginController extends Controller
{
    /**
     * @param  Response  $response
     *
     * @return Response
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     *
     * @throws \Twig\Error\LoaderError
     */
    public function show(Response $response): Response
    {
        if ($this->session->get('logged', false)) {
            return redirect($response, route('home'));
        }

        $registerEnabled = $this->database->query('SELECT `value` FROM `settings` WHERE `key` = \'register_enabled\'')->fetch()->value ?? 'off';

        return view()->render($response, 'auth/login.twig', [
            'register_enabled' => $registerEnabled,
        ]);
    }

    /**
     * @param  Request  $request
     * @param  Response  $response
     *
     * @return Response
     * @throws \Exception
     *
     */
    public function login(Request $request, Response $response): Response
    {
        $username = param($request, 'username');
        $result = $this->database->query('SELECT `id`, `email`, `username`, `password`,`is_admin`, `active` FROM `users` WHERE `username` = ? OR `email` = ? LIMIT 1', [$username, $username])->fetch();

        if (!$result || !password_verify(param($request, 'password'), $result->password)) {
            $this->session->alert(lang('bad_login'), 'danger');
            return redirect($response, route('login'));
        }

        if (isset($this->config['maintenance']) && $this->config['maintenance'] && !$result->is_admin) {
            $this->session->alert(lang('maintenance_in_progress'), 'info');
            return redirect($response, route('login'));
        }

        if (!$result->active) {
            $this->session->alert(lang('account_disabled'), 'danger');
            return redirect($response, route('login'));
        }

        $this->session->set('logged', true);
        $this->session->set('user_id', $result->id);
        $this->session->set('username', $result->username);
        $this->session->set('admin', $result->is_admin);
        // TODO: update
        $this->session->set('used_space', humanFileSize($this->getUsedSpaceByUser($result->id)));

        $this->session->alert(lang('welcome', [$result->username]), 'info');
        $this->logger->info("User $result->username logged in.");

        if (param($request, 'remember') === 'on') {
            $this->refreshRememberCookie($result->id);
        }

        if ($this->session->has('redirectTo')) {
            return redirect($response, $this->session->get('redirectTo'));
        }

        return redirect($response, route('home'));
    }

    /**
     * @param  Request  $request
     * @param  Response  $response
     *
     * @return Response
     */
    public function logout(Request $request, Response $response): Response
    {
        $this->session->clear();
        $this->session->set('logged', false);
        $this->session->alert(lang('goodbye'), 'warning');

        if (!empty($request->getCookieParams()['remember'])) {
            setcookie('remember', null);
        }

        return redirect($response, route('login.show'));
    }
}