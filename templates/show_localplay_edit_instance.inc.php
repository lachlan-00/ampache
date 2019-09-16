<?php
/* vim:set softtabstop=4 shiftwidth=4 expandtab: */
/**
 *
 * LICENSE: GNU Affero General Public License, version 3 (AGPLv3)
 * Copyright 2001 - 2019 Ampache.org
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
?>
<?php UI::show_box_top(T_('Edit Localplay Instance'), 'box box_localplay_edit_instance'); ?>
<form method="post" action="<?php echo AmpConfig::get('web_path'); ?>/localplay.php?action=update_instance&amp;instance=<?php echo (int) scrub_in(filter_input(INPUT_GET, 'instance', FILTER_SANITIZE_SPECIAL_CHARS)); ?>">
<table cellpadding="3" cellspacing="0" class="tabledata">
<?php foreach ($fields as $key => $field) {
    ?>
<tr>
    <td><?php echo $field['description']; ?></td>
    <td><input type="<?php echo $field['type']; ?>" name="<?php echo $key; ?>" value="<?php echo scrub_out($instance[$key]); ?>" /></td>
</tr>
<?php
} ?>
</table>
    <div class="formValidation">
        <input type="submit" value="<?php echo T_('Update Instance'); ?>" />
  </div>
</form>
<?php UI::show_box_bottom(true); ?>
