=== Limited Editor ===
Contributors: sixaxis
Tags: limited editor, seo editor, new role, user permissions
Requires at least: 4.3
Tested up to: 6.7
Stable tag: 1.1
License: GPLv2+
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a new user role \"Limited editor\" to WordPress when the plugin is activated. After that, the plugin can be removed.

== Description ==
The default user roles of WordPress are sufficient for most people, but in some cases they give either too many or too few permissions.

This plugin creates a new role called Limited editor. A Limited editor is given just the right amount of permissions to create or edit any post or page, even if it's not their own, but without being able to delete them or publish any change. This means that every change is submitted for review and only a regular editor or administrator can approve and publish the changes. A Limited editor also cannot upload media.

The Limited editor role is perfect for users who only need access to the content itself, such as SEO managers or proofreaders, because a regular Editor can delete and publish what you may not want, and an Author or Contributor can only edit their own posts, not those of others.

This is the list of capabilities the Limited Editor role is assigned:
- `read`
- `read_private_posts`
- `read_private_pages`
- `edit_private_posts`
- `edit_private_pages`
- `edit_posts`
- `edit_pages`
- `edit_others_posts`
- `edit_others_pages`
- `edit_published_posts`
- `edit_published_pages`
- `unfiltered_html`

The plugin doesn't affect the performance of the website at all. It just adds a new role in the database and that's it. Not only that, you can easily remove the plugin after the first activation.

== Installation ==
1. Install Limited Editor via the plugin directory, and activate it.
2. Activate Limited Editor
3. Remove the plugin. Yes, you can remove it.

== Changelog ==

### 1.0

* Initial release

### 1.1

**Release date: 29/10/2024**

* Fix: Added `unfiltered_html` capability to prevent broken blocks upon saving pages
