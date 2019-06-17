<?php


namespace Aldaflux\TableTriableBundle\Twig;

class TableTriableExtension extends \Twig_Extension 
{   

    public function getName()
    {
        return 'aldaflux_table_triable_extension';
    }
    
    
    
    public function formatBytes($size, $precision = 1) { 
        if ($size >= 1073741824) 
            {
                $fileSize = round($size / 1024 / 1024 / 1024,$precision) . 'GB';
            }
            elseif ($size >= 1048576) 
            {
                $fileSize = round($size / 1024 / 1024,$precision) . 'MB';
            } 
            elseif($size >= 1024) {
                $fileSize = round($size / 1024,$precision) . 'KB';
        } 
        else 
        {
            $fileSize = $size . 'B';
        }
        return $fileSize;
    }
    
    
    
    
    public function getFilters()
    {
        return array( 
            new \Twig_SimpleFilter('TdDuration', array($this, 'TdDuration')), 
            new \Twig_SimpleFilter('TdBytes', array($this, 'TdBytes')) 
            );
    }
    
    
    public function TdBytes($bytes ) 
    { 
         return("<td data-order='".$bytes."'>".$this->formatBytes($bytes)."</td>");
    }
     
    
    public function TdDuration($duration ) 
    { 
        $duree="";
        
        $seconds = ($duration->s)
         + ($duration->i * 60)
         + ($duration->h * 60 * 60)
         + ($duration->d * 60 * 60 * 24)
         + ($duration->m * 60 * 60 * 24 * 30)
         + ($duration->y * 60 * 60 * 24 * 365);
        
        if ($duration)
        {
            $duree="<td data-order='".$seconds."'>";
            if ($duration->format('%i')>0)
            {
                $duree.=$duration->format('%i minutes  %S secondes');        
            }
            else
            {
                $duree.=$duration->format('%S secondes');        
            }
            $duree.="</td>";
            return($duree);
        }
        return("<td class='alert-danger'></td>");
    }
     
    
}