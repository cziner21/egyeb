<?php
    class m_header extends CI_Model
    {
    
        function microtime_float()
        {
            list($msec, $sec) = explode(' ', microtime());
            $microtime = (float)$msec + (float)$sec;
            return $microtime;
        }
    
        function timer_start()
        {
            global $TIME_START;
            $TIME_START = microtime_float();
        }
    
        function timer_end()
        {
            global $TIME_END;
            $TIME_END = microtime_float();
    
        }
    
        function timer_print()
        {
            global $TIME_START, $TIME_END;
            return round(($TIME_END - $TIME_START) * 1000, 0);
        }
    
    
    }

?>
