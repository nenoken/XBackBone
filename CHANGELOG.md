## v.3.1 (WIP)
+ Added registration system.
+ Added password recovery system.
+ Added ability to export all media of an account.
+ Added ability to choose between default and raw url on copy.
+ Added hide by default option.
+ Added user disk quota.
+ Fixed bug html files raws are rendered in a browser.
+ The theme is now re-applied after every system update.
+ Updated system settings page.
+ Updated translations.
+ Small fixes and improvements.

## v.3.0.2
+ Fixed error with migrate command.
+ Updated translations.

## v.3.0.1
+ Fixed error with older mysql versions.
+ Fixed config is compiled with the di container.
+ Small installer update.

## v.3.0
+ Upgraded from Slim3 to Slim 4.
+ Added web upload.
+ Added ability to add custom HTML in \<head\> tag.
+ Added ability to show a preview of PDF files.
+ Added remember me functionality.
+ Added delete button on the preview page if the user is logged in.
+ New project icon (by [@SerenaItalia](https://www.deviantart.com/serenaitalia)).
+ Raw URL now accept file extensions.
+ The linux script can be used on headless systems.
+ Improved installer.
+ Improved thumbnail generation.
+ Replaced videojs player with Plyr.
+ Implemented SameSite XSS protection.
+ Small fixes and improvements.

## v.2.6.6
+ Ability to choose between releases and prereleases with the web updater.
+ Updated translations.

## v2.6.5
+ Fixed error after orphaned files removal #74.
+ Fixed update password not correctly removed from log files #74.
+ Changed color to some buttons to address visibility with some themes.

## v2.6.4
+ Filter on displayable images.
+ Fixed during upload error on php compiled for 32 bit.
+ Fixed icons on the installer page.
+ The generated random strings are now more human readable.

## v2.6.3
+ Fixed #67.
+ Fixed bad preload statement.
+ Fixed wrong redirect after install in subdirs.

## v2.6.2
+ Use the font awesome web font for better performances.
+ Changed background default color.
+ Added method for cache busting when updating/change theme.
+ Added russian translation from [Weblate](https://hosted.weblate.org/projects/xbackbone/xbackbone/).

## v2.6.1
+ Fixed bad redirects on the web installer (#62).
+ Fixed login page with dark themes.
+ Improved shell commands.
+ Added alert if required extensions are not loaded.
+ Updated translations.

## v2.6
+ Added support to use AWS S3, Google Cloud Storage, Dropbox and FTP(s) accounts as storage location.
+ Fixed missing icon.
+ Added german and norwegian translations from [Weblate](https://hosted.weblate.org/projects/xbackbone/xbackbone/).
+ Improved lang detection.
+ Added ability to force system language.

## v2.5.3
+ Fixed bad css loading on Firefox (#35).
+ Fixed wrong style for publish/unpublish button.
+ Improved exception stacktrace logging.

## v2.5.2
+ Improved session handling.
+ Fixed telegram share not working.
+ Fix for big text file now are not rendered in the browser.
+ Added preloading for some resources to improve performances.
+ Added check for block execution on EOL and unsupported PHP versions.
+ Other minor improvements.

## v2.5.1
+ Fixed bad redirect if the theme folder is not writable. (#27)
+ Improved HTTP partial content implementation for large files.

## v2.5
+ Updated project license to <a href="https://choosealicense.com/licenses/agpl-3.0/">AGPL v3.0</a> (now releases ships with the new license).
+ **[BETA]** Added self update feature.
+ Added partial content implementation (stream seeking on chromium based browsers).
+ Improved video.js alignment with large videos.
+ Optimized output zip release size.
+ Templates cleanup and optimizations.
+ Improved error handling.
+ Added project favicon.

## v2.4.1
+ Fixed error message when the file is too large. (#15)
+ Fixed button alignment.

## v2.4
+ Added function to remove orphaned files.
+ Switch between tab and gallery mode using an admin account.
+ Multiple uploads sorting methods.
+ Search in uploads.
+ Internal refactoring and improvements
+ Updated js dependencies.

## v2.3.1
+ Fixed en lang.
+ Fixed forced background with dark themes.
+ Added checks during the installation wizard.
+ cURL and Wget can now directly download the file.

## v2.3
+ Improved image scaling in user gallery.
+ Added overlay on user gallery images.
+ Fixed IT translation.
+ Fontawesome icon match the single file mime-type.
+ Enable audio player with video.js.
+ Video and audio now starts with volume at 50%.
+ Added linux script to allow uploads from linux screenshot tools.
+ Minor layout fixes.

## v2.2
+ Added multi-language support.
+ Improved routing.
+ Fixed HTTP/2 push is resetting the current session.
+ Minor improvements and bug fixes.

## v2.1
+ Improved theme style.
+ Improved page redirecting.
+ Allow e-mail login.
+ Support for ShareX deletion URL.
+ Fixed HTTP/2 push preload.
+ Added video.js support.

## v2.0
+ Migrated from Flight to Slim 3 framework.
+ Added install wizard (using the CLI is no longer required).
+ Allow discord bot to display the preview.
+ Theme switcher on the web UI.
+ Added used space indicator per user.
+ MySQL support.
+ Improvements under the hood.

## v1.3
+ Added command to switch between bootswatch.com themes.
+ Added popever to write the telegram message when sharing.
+ Packaging improvements.
+ Updated some dependencies.
+ Allow Facebook bots to display the preview.

## v1.2
+ Previews are now scaled for better page load.
+ Added auto config generator for ShareX.
+ Show upload file size on the dashboard.
+ Fixed insert for admin user (running `php bin\migrate --install`).
+ Removed HTTP2 push from the dashboard to improve loading time.

## v1.1
+ Added logging.
+ Fixed back to top when click delete or publish/unpublish.
+ Improved migrate system.
+ Login redirect back to the requested page.
+ Updated Bootstrap theme.
+ Added share to Telegram.

## v1.0
+ Initial version.
