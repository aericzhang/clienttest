<?php
/*
 * @Descripttion: client
 * @Author: zhangwei
 * @Date: 2020-05-18 20:52:44
 */ 

class Client
{

    /**
     * @name: get greeting according to the time
     * @return: string
     */
    public function getGreeting() {
        $morningStart = strtotime(date('Y-m-d 00:00:00', time()));
        $noonStart = strtotime(date('Y-m-d 12:00:00', time()));
        $eveningStart = strtotime(date('Y-m-d 18:00:00', time()));
        if (time() > $morningStart && time() <= $noonStart)
            return 'Good morning';
        else if (time() > $noonStart && time() <= $eveningStart)
            return 'Good afternoon';
        else if (time() > $eveningStart && time() <= $morningStart)
            return 'Good evening';
        return 'hello';       
    }
}
