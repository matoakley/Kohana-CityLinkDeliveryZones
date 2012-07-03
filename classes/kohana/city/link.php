<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Massively simple wrapper for the CityLink_Delivery_Zone library.
 *
 * @author     Matt Oakley @ Creative Intent (matt@creativeintent.co.uk)
 * @copyright  (c) 2010-2012 Creative Intent
 * @license GPL
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 */
abstract class Kohana_City_Link
{
	public static function find_zone_by_postcode($postcode)
	{
		return CityLinkDeliveryZone::find_by_postcode($postcode);
	}
}
