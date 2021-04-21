<?php
defined( 'ABSPATH' ) || exit;

/* @var $wqm_n string */
/* @var $wqm_nickname string */
/* @var $wqm_sound string */
/* @var $wqm_tel string */
/* @var $wqm_tel_av string */
/* @var $wqm_email string */
/* @var $wqm_adr string */
/* @var $wqm_bday string */
/* @var $wqm_title string */
/* @var $wqm_org string */
/* @var $wqm_url string */
/* @var $wqm_note string */
?>

<table class="form-table" role="presentation">
    <tbody>
    <tr class="field-n">
        <th><label for="field-n"><?php _e( 'Name', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_n" id="field-n" class="regular-text" placeholder="Web Marshal"
                   value="<?php echo $wqm_n; ?>">
            <span class="description"><?php _e( 'A structured representation of the name of the person. When a field is divided by a comma (,), the first half is treated as the last name and the second half is treated as the first name.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-nickname">
        <th><label for="field-nickname"><?php _e( 'Nickname', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_nickname" id="field-nickname" class="regular-text" placeholder="WM_the_best"
                   value="<?php echo $wqm_nickname; ?>">
            <span class="description"><?php _e( 'Familiar name for the object represented by this MeCard/vCard.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-sound">
        <th><label for="field-sound"><?php _e( 'Sound', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_sound" id="field-sound" class="regular-text" placeholder="WM_the_best"
                   value="<?php echo $wqm_sound; ?>">
            <span class="description"><?php _e( 'Designates a text string to be set as the kana name in the phonebook. When a field is divided by a comma (,), the first half is treated as the last name and the second half is treated as the first name.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-tel">
        <th><label for="field-tel"><?php _e( 'Phone', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_tel" id="field-tel" class="regular-text" placeholder="+7(978) 571-91-44"
                   value="<?php echo $wqm_tel; ?>">
            <span class="description"><?php _e( 'The canonical number string for a telephone number for telephony communication.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-tel-av">
        <th><label for="field-tel-av"><?php _e( 'Videophone', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_tel_av" id="field-tel-av" class="regular-text" placeholder="+7(978) 571-91-44"
                   value="<?php echo $wqm_tel_av; ?>">
            <span class="description"><?php _e( 'The canonical string for a videophone number communication.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-email">
        <th><label for="field-email"><?php _e( 'Email', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_email" id="field-email" class="regular-text"
                   placeholder="web.marshal.ru@gmail.com"
                   value="<?php echo $wqm_email; ?>">
            <span class="description"><?php _e( 'The address for electronic mail communication.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-adr">
        <th><label for="field-adr"><?php _e( 'Address', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_adr" id="field-adr" class="regular-text"
                   placeholder="Киевская улица, 160, офис 312, Симферополь, Республика Крым, Россия, 295043"
                   value="<?php echo $wqm_adr; ?>">
            <span class="description"><?php _e( 'The physical delivery address. The fields divided by commas (,) denote PO box, room number, house number, city, prefecture, zip code and country, in order.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-bday">
        <th><label for="field-bday"><?php _e( 'Birthday', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_bday" id="field-bday" class="regular-text" placeholder="2018-11-21"
                   value="<?php echo $wqm_bday; ?>">
            <span class="description"><?php _e( '8 digits for date of birth: year (4 digits), month (2 digits) and day (2 digits), in order.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-title">
        <th><label for="field-title"><?php _e( 'Title', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_title" id="field-title" class="regular-text" placeholder="Web Marshal"
                   value="<?php echo $wqm_title; ?>">
            <span class="description"><?php _e( 'Position held in organization.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-org">
        <th><label for="field-org"><?php _e( 'Organization', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_org" id="field-org" class="regular-text" placeholder="Web Marshal"
                   value="<?php echo $wqm_org; ?>">
            <span class="description"><?php _e( 'Organization name.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-url">
        <th><label for="field-url"><?php _e( 'Url', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_url" id="field-url" class="regular-text" placeholder="https://web-marshal.ru/"
                   value="<?php echo $wqm_url; ?>">
            <span class="description"><?php _e( 'A URL pointing to a website that represents the person in some way.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    <tr class="field-note">
        <th><label for="field-note"><?php _e( 'Note', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></label></th>
        <td>
            <input type="text" name="wqm_note" id="field-note" class="regular-text"
                   value="<?php echo $wqm_note; ?>">
            <span class="description"><?php _e( 'Specifies supplemental information to be set as memo in the phonebook.', WQM_Common::PLUGIN_SYSTEM_NAME ) ?></span>
        </td>
    </tr>
    </tbody>
</table>
