<?php

function generateApplicationLink()
{
    if(config('app.env' == 'local')) {
        return "https://nepza.online:8000/enterprise/" . rand(111111,999999);
    }

    if(config('app.env' == 'staging')) {
        return "https://nepza-staging.herokuapp.com/enterprise/" . rand(111111,999999);
    }

    return "https://nepza.online/enterprise/" . rand(111111,999999);
}
