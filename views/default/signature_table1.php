<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
 ?>
<?php if (@$vi) {?>
	<table>
		<tr>
			<td>Signed:............................</td>
			<td>Date:...............................</td>
		</tr>
		<tr>
			<td>Name (PRINT): <?php if (!@$mask_consultant) { echo $consultant->fullNameAndTitle; } ?></td>
			<td>Job title: <?php if (!@$mask_consultant) { echo $consultant->role; } ?></td>
		</tr>
	</table>
	<?php if (@$lastmodified && $consultant->id != $lastmodified->id) {?>
		<div class="spacer"></div>
		<table>
			<tr>
				<td>Signed:............................</td>
				<td>Date:...............................</td>
			</tr>
			<tr>
				<td>Name (PRINT): <?php echo $lastmodified->fullNameAndTitle?></td>
				<td>Job title: <?php echo $lastmodified->role?></td>
			</tr>
		</table>
	<?php }?>
<?php } else {?>
	<table>
		<tr>
			<td>Signed:.............................................</td>
			<td>Date:...........................................</td>
		</tr>
		<tr>
			<td>Name (PRINT): <?php if (!@$mask_consultant) { echo $consultant->fullNameAndTitle; } ?></td>
			<td>Job title: <?php if (!@$mask_consultant) { echo $consultant->role; } ?></td>
		</tr>
	</table>
	<?php if (@$lastmodified && $consultant->id != $lastmodified->id) {?>
		<div class="spacer"></div>
		<table>
			<tr>
				<td>Signed:.............................................</td>
				<td>Date:...........................................</td>
			</tr>
			<tr>
				<td>Name (PRINT): <?php echo $lastmodified->fullNameAndTitle?></td>
				<td>Job title: <?php echo $lastmodified->role?></td>
			</tr>
		</table>
	<?php }?>
<?php }?>
