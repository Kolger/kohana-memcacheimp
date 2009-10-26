<?php
class Cache extends Cache_Core {

	/**
	 * Delete all cache items with a given tag.
	 *
	 * @param   string   cache tag name
	 * @return  boolean
	 */
	public function delete_tag($tag)
	{
		if ($this->driver instanceof Cache_Memcacheimp_Driver) {
			$this->driver->delete_tag($tag);
		}
		else {
			return $this->driver->delete($tag, TRUE);
		}
	}


} // End Cache
