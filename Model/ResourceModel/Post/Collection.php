<?php 

declare(strict_types=1);

namespace MageMastery\Blog\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use MageMastery\Blog\Model\Post;
use MageMastery\Blog\Model\ResourceModel\Post as PostResource; 

//when we have to work with multiple rows 
//and multiple entities there is a class collection.php
//it knows where to fetch data from using PostResource and
//it knows what type of enntity or class has to be created
//when a row has to fetched from databases and it provides collection of Post from database
class collection extends AbstractCollection 
{
    protected function _construct(){
        $this->_init(Post::class, PostResource::class);
    }
}