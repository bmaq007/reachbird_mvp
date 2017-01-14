<?php

namespace Reachbird\Services;

class views
{

    public static function generateInfluencerSelect( ) {
        $db_object = new db();
        $return = "<select ><option>Select Influencer Account</option>";
        $influencers = $db_object->getInfluencersNames();
        if (! empty($influencers)) {
            foreach ($influencers as $influencer) {
                $id = $influencer['id'];
                $name = $influencer['name'];
                $return .= "<option value='$id'>$name</option>";
            }
        }

        $return .= "</select>";

        return $return;
    }
}