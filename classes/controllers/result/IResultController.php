<?php
/**
 * Interface model
 * @package block_quiz_reporting
 * @copyright 2023, Santacruz John, AP Hogeschool
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace block_quiz_reporting\controllers\result;

interface IResultController{
    public function getMyResultsDto():array;
    public function showContentView():string;
    public function convertToResultDtoArray(array $inputArray):array;
    public function groupByCategory(array $inputArray):array;
}