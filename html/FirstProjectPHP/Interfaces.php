<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Interfaces
 *
 * @author root
 */
interface Frame{
    public function close();
    public function minimize();
    public function restore();
}

interface Player extends Frame{
    public function play();
    public function stop();
    public function pause();
}

interface Component{
    public function getName();
    public function drawSelf();
}

interface Button extends Component{
    public function click();
}

interface NextButton extends Button{
    public function nextSwitch();
}

interface PrevButton extends Button{
    public function prevSwitch();
}

interface PauseButton extends Button{
    public function pause();
}

interface SongList extends Component {
    public function toArray();
    public function chooseSong();
}

interface ControlPanel extends Component{
    public function mix();
    public function repeat();
    public function save();
}

interface Search extends SongList{
    public function search();
}


