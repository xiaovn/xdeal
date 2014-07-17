<?php

Class camera_featureModel extends baseModel
{
	public function showcamere()
    {
        global $db;
        $db->query("SELECT * FROM camera_feature");
        return $db->fetch_object();
    }
}
