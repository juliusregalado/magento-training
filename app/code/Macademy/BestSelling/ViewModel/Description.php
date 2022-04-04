<?php
namespace Macademy\Bestselling\ViewModel;

use Magento\Framework\View\Element\Block\ArgumentInterface;

class Description implements ArgumentInterface
{
    public function getWithWordCount() 
    {
        $description = __('this is a description');
        $wordCount = str_word_count($description);
        return "$description <em>($wordCount words)</em>";
    }  

}