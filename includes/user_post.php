<?php
class Post extends Api{
    public $user_id ;
    public $post_id ;
    public $name ;
    public $tell ;
    public $email ;
    public $area ;
    public $location ;
    public $city;
    public $price ;
    public $price_type;
    public $type ;
    public $rooms ;
    public $bedroom ;
    public $bathroom ;
    public $recaptionroom ;
    public $time ;
    public $details;
    public $cadastral;
    public $verify ;
    public $balacony ;
    public $tree ;
    public $ready ;
    public $electricity ;
    public $clothesroom ;
    public $Swimming ;
    public $camera ;
    public $security ;
    public $garage ;
    public $park ;
    public $gym ;
    public $market ;
    public $angles ;
    protected static $table = "`posts`";
    protected static $columns= array(
    'user_id','post_id','name','tell','email','area','location','price','type','rooms','bedroom','bathroom','recaptionroom','time','details','price_type','city','cadastral','verify',
    'balacony','tree','ready','electricity','clothesroom','Swimming','camera','security','garage','park','gym','market','angles'
);
}
$post = new Post();


?>