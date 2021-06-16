<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

# About this Release
This is a custom version of [Laravel Framework 8](https://www.laravel.com). Based on Laravel >= 8.39.
This release contains the following features:


## External packages

### Staging Packages

### Development Packages
- [Laravel Debugbar](https://github.com/barryvdh/laravel-debugbar)

### Libraries
#### Stylesheets
- Custom Bootstrap based on version 5.0.1
- Font Awesome Free 5.15.3
- Custom stylesheet

#### Javascripts
- Bootstrap 5.0.1
- CKEditor 5
- Font Awesome Free 5.15.3
- JQuery 3.6.0

#### Fonts
- EasyReading (for a better reading; also for dyslexic people. Enabled for default)
- Font Awesome Free Fonts

## TODO and IDEAS
- Two-Factor Authentication
- [Impersonate other users](https://mauricius.dev/easily-impersonate-any-user-in-a-laravel-application);
- Custom Laravel Blade Directives
- Forgot and Reset password
- Password History Validation
- User Profile
	- Edit password
	- Update profile avatar
- Implementation of Taxonomies
- Terms & Conditions Checkbox on Registration
- Remember me checkbox on Login
- Block/Unblock users
- Delete/Restore users
- Delete/Restore roles
- Delete/Restore permissions

### User account
- User roles and permissions
- Custom Login form;
- Password uses standard Bcrypt algorithm but with the 12 rounds options instead 10;
- Custom Change Password (authenticated user);
	- Implemented the new featured for the password validation:
		- Makes the password require at least one letter
		- Makes the password require at least one number
		- Makes the password require at least one uppercase and one lowercase letter
		- Makes the password require at least one symbol
		- Ensures the password has not been compromized in data leaks (added but not enabled)
		- Reject common passwords (added but not enabled)
- Custom Registration form;
	- Implemented the new featured for the password validation:
		- Makes the password require at least one letter
		- Makes the password require at least one number
		- Makes the password require at least one uppercase and one lowercase letter
		- Makes the password require at least one symbol
		- Ensures the password has not been compromized in data leaks (added but not enabled)
		- Reject common passwords (added but not enabled)

### Pages
#### Frontend
- Custom Error Pages
	- 4xx:
		- 400, 401, 402, 403, 404, 405, 406, 408, 419;
	- 5xx:
		- 500;

#### Backend
- Admin Dashboard
	- Manage users
		- Users list
		- Add new user
		- Edit user
		- Show user
	- Manage roles
		- Roles list
		- Add new role
		- Edit role
		- Show role
	- Manage permissions
		- Permissions list
		- Add a new permission
		- Edit a permission
		- Associate permission to a role

### System
- [Roles and Permissions](https://www.codecheef.org/article/user-roles-and-permissions-tutorial-in-laravel-without-packages)

### Custom Helper Functions
- activeLink: check if the current page has the current route and returns the class 'active';
- copyYear (returns year based on 2021 or wahatever. ex. 2018-2021 or 2021 or 2022);
- ellipses: truncate the text for the specified characters and add the ellipses (...);
- humanReadable: returns the date in the human readable format (times ago);
- nbsp: returns the specifiled quantity of nbsp;
- removeIgnoredWords
- removeScriptTags
- seoFriendlyMetaDescription
- separator: returns a simple line separator;

### External packages included
- [Laravel Blade Directives](https://github.com/appstract/laravel-blade-directives);
