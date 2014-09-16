<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Mihon
 */
interface IBaseBean {
    function getTitle();
    function getMetaTags();
    
    function getBaseINIArray();
    function getBeanINIArray();

    /**
     * @param ARRAY $arrayINI array von application.ini
     */
    function setINIArray($arrayINI);
}

?>
