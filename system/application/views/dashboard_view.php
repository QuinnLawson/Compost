<?php
/*
 * This file is part of Compost.
 *
 * Compost is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Compost is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Compost.  If not, see <http://www.gnu.org/licenses/>.
 */

include 'header.php'; ?>
<ul id="recentactivity">
<?php foreach ($recentitems as $item) { ?>
	<li>
		<span class="date"><?php echo $this->relativedate->getRelativeDate($item['LogTimestamp']); ?> -</span>
		<span class="event"><?php echo $item['LogEvent']; ?></span>
	</li>
<?php } ?>
</ul>
<?php include 'footer.php'; ?>