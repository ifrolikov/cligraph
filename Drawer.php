<?php
declare(strict_types=1);

namespace CliGraph;

class Drawer
{
    private const FILLED_ITEM = '▉';
    private const UNFILLED_ITEM = '░';
    
    /**
     * @var int
     */
    private $fullLineSize;
    
    public function __construct($fullLineSize = 20)
    {
        $this->fullLineSize = $fullLineSize;
    }
    
    public function getBar(float $percent): string
    {
        $filledItems = round($percent / 100 * $this->fullLineSize);
        $unfilledItems = $this->fullLineSize - $filledItems;
        $result = "";
        if (!empty($filledItems)) {
            foreach (range(0, $filledItems-1) as $counter) {
                $result .= self::FILLED_ITEM;
            }
        }
        if (!empty($unfilledItems)) {
            foreach (range(0, $unfilledItems-1) as $counter) {
                $result .= self::UNFILLED_ITEM;
            }
        }
        return $result;
    }
}
