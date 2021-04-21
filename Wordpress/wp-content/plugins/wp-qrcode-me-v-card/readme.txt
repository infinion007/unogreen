=== QR code MeCard/vCard generator ===
Contributors: stasionok
Donate link: https://web-marshal.ru/qr-code-mecard-vcard-generator/
Tags: mecard, vcard, qrcode, qr code, shortcode, widget
Requires at least: 5.0
Tested up to: 5.7
Stable tag: 1.3
Requires PHP: 7.1
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Share your contact information such as emails, phone number and much more through QR code with Wordpress using shortcode, widget or by direct link.

== Description ==

Plugin Generate QR code in vCard or MeCard format with your contact information.

Share your contact information such as emails and phone numbers and much more through QR code with Wordpress using shortcode, widget or everywhere else by direct link.

That plugin use MeCard format and vCard version 3 format as most compatible and frequently used.

You can read detailed information about vCard [here](https://wikipedia.org/wiki/VCard "Wikipedia about vCard"), and about MeCard [here](https://en.wikipedia.org/wiki/MeCard_(QR_code) "Wikipedia about MeCard").

== Installation ==

This section describes how to install the plugin and get it working.

1. Upload the plugin files to the `/wp-content/plugins/wp-qrcode-me-v-card` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use plugin`s created post type to create and manage QR code card.

== Frequently Asked Questions ==

= Why I can`t read QR code some times =

That happens if you disable margin around code or set it too small. In this case your QR code reader can`t detect QR code borders.

= Why my device do not see all MeCard/vCard filled fields =

Different devices and different software may not work with some fields which are set in the code standard. But all of them should work with basic fields as phone, email, url, name and address.

= Why QR code not works when logo placed in QR code center =

QR code has additional information which help read damaged code. When you place logo you actually make code "damaged". And if you can`t read QR code after logo placed just make logo smaller or/and correction level higher

== Screenshots ==

1. Add new QR code personal contact information card and setting up result
2. Featured image with QR code created after saving new card. And regenerate after each update
3. In saved QR code cards list you can view QR code, get QR code shortcode or copy direct link to image
4. On widgets page you can select which of saved card to show at selected widget area.

== Changelog ==

= 1.0 =
* Basic functionality released.

= 1.1 - 2020-01-01 =
Add optional logo on center of QR code image.

= 1.1.1 - 2020-01-08 =
Fix missing static content

= 1.2 - 2020-02-03 =
Fix remove logo image issue
Fix permanent url for QR code
New permalink behaviour - now create it by request

= 1.3 - 2020-03-03 =
Fix generate vCard
Fix zero margin
Fix clear logo in form
New add ability to save or open QE code by click
