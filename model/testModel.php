<?php

Class testModel extends baseModel
{
    public function showall()
    {
        global $db;
        $db->query("SELECT * FROM camera_feature");
        return $db->fetch_object();
    }
	public function filter($id)
	{
		global $db;
        $db->query("SELECT * FROM camera_feature WHERE id = '".$id."'");
        return $db->fetch_object(true);
	}
}