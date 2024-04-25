<?php
namespace Home\Model;
use Think\Model;

class IndexModel extends Model {
	
	
	
	public function __construct(){
        
    }
	
	public function createindex(){
		
		$sql = "CREATE TABLE IF NOT EXISTS `t_index` (
                `id` INTEGER PRIMARY KEY AUTOINCREMENT,
                `title` VARCHAR(255) NOT NULL,
				`img` VARCHAR(255) NOT NULL,
				`content` VARCHAR(255) NOT NULL,
				`url` VARCHAR(255) NOT NULL,
                `title1` VARCHAR(255) NOT NULL,
				`img1` VARCHAR(255) NOT NULL,
				`content1` VARCHAR(255) NOT NULL,
				`url1` VARCHAR(255) NOT NULL,
				 `title2` VARCHAR(255) NOT NULL,
				`img2` VARCHAR(255) NOT NULL,
				`content2` VARCHAR(255) NOT NULL,
				`url2` VARCHAR(255) NOT NULL      
                )";
	    $result=M()->execute($sql);
		return $result;
	}
	
	public function addindex(){
		$title="SPRITE";
		$img="/Public/images/1.jpg";
		$content="First introduced in 1961, crisp, refreshing, clean-tasting Sprite is now the world's leading lemon and lime flavoured soft drink and is sold in more than 190 different countries. Sprite Zero, part of our no sugar Zero range, offers the delicious lemon lime taste of Sprite without the sugar or calories.";
		
		$url="https://www.coca-cola.com/gb/en/brands/sprite";
		
		
		
		$title1="COSTA COFFEE";
		$img1="/Public/images/3.jpg";
		$content1="Costa Coffee was founded in London in 1971 by Sergio Costa as a wholesale operation supplying roasted coffee to caterers and specialist Italian coffee shops. It was acquired by Whitbread in 1995, then sold to The Coca-Cola Company in January 2019 in a deal worth $4.9 billion, then sold to the Coca-Cola Company in January 2019 in a deal worth $4.9 billion and has grown to 3,401 stores across 31 countries and 18,412 employees. The business has 2,121 UK restaurants and has grown to 3,401 stores across 31 countries and 18,412 employees. The business has 2,121 UK restaurants, over 6,000 Costa Express vending facilities and a further 1,280 outlets overseas, including 460 in China.";
		
		$url1="https://www.coca-cola.com/gb/en/brands/costa-coffee";
		
		$title2="Coca-Cola";
		$img2="/Public/images/2.jpg";
		$content2="It was 1886, John Pemberton, an Atlanta pharmacist, was inspired by simple curiosity. One afternoon, he stirred up a fragrant, caramel-coloured liquid and, when it was done, the mixture was combined with carbonated water and sampled by customers who all agreed - this new drink was something special!";
		
		$url2="https://www.coca-cola.com/gb/en/brands/coca-cola-original-taste";
		
		$sql = 'INSERT INTO t_index ( title, img,content,url,title1, img1,content1,url1,title2, img2,content2,url2)  
				   VALUES ( "'.$title.'", "'.$img.'","'.$content.'","'.$url.'","'.$title1.'","'.$img1.'","'.$content1.'","'.$url1.'","'.$title2.'","'.$img2.'","'.$content2.'","'.$url2.'")';
	    $result=M()->execute($sql);
		return $result;
		
	}
	
	public function dropindex(){
		
		$sql="drop table t_index";
		
		$result=M()->execute($sql);
		return $result;
		
	}
	
	public function indexshow(){
		
		$sql='select * from t_index ';
        $list=M()->query($sql);	
		return $list;
	}
	
	public function createstate(){
		$sql = "CREATE TABLE IF NOT EXISTS `t_state` (
                `id` INTEGER PRIMARY KEY AUTOINCREMENT,
                `content` VARCHAR(255) NOT NULL 
                )";
	    $result=M()->execute($sql);
		return $result;
		
	}
	
	
	public function addstate(){
		$content="This assignment is submitted as part requirement for the degree of ... at the University of Sussex. It is the product of my own labour except where indicated in the accompanying codebase. This assignment may be freely copied and distributed provided the source is acknowledged. I hereby give / withhold permission for a copy of this assignment to be loaned out to students in future years (delete/update as necessary).";

		$sql = 'INSERT INTO t_state ( content)  
				   VALUES ( "'.$content.'")';
	    $result=M()->execute($sql);
		return $result;
		
	}
	
	public function dropstate(){
		
		$sql="drop table t_state";
		
		$result=M()->execute($sql);
		return $result;
		
	}
	
	
	public function stateshow(){
		
		$sql='select * from t_state ';
        $list=M()->query($sql);	
		return $list;
	}
	
	
	
	public function createmodels(){
		$sql = "CREATE TABLE IF NOT EXISTS `t_models` (
                `id` INTEGER PRIMARY KEY AUTOINCREMENT,
                `tietu` VARCHAR(255) NOT NULL,
				`wangge` VARCHAR(255) NOT NULL,
				`yuanxing` VARCHAR(255) NOT NULL,
				`tietudaxiao` VARCHAR(255) NOT NULL,
				`wanggedaxiao` VARCHAR(255) NOT NULL,
				`yuanxingdaxiao` VARCHAR(255) NOT NULL
                )";
	    $result=M()->execute($sql);
		return $result;
		
	}
	
	public function addmodels(){
		//$tietu="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/sprite.x3d";
        //$wangge="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/spritewange.x3d";
		//$yuanxing="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/spriteyuanxing.x3d";
		//$tietudaxiao='0 120 500';
		//$wanggedaxiao='70 120 500';
		//$yuanxingdaxiao='70 120 500';
		
		//$tietu="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/costa.x3d";
        //$wangge="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/costawangge.x3d";
		//$yuanxing="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/costayuanxing.x3d";
		//$tietudaxiao='0 5 25';
		//$wanggedaxiao='0 2 10';
		//$yuanxingdaxiao='0 5 25';
		
		$tietu="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/lingdukele.x3d";
        $wangge="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/lingdukelewangge.x3d";
	$yuanxing="https://users.sussex.ac.uk/~yy414/assignment/3dapp/3dapp/Public/x3d/lingdukeleyuanxing.x3d";
$tietudaxiao='0 200 400';
$wanggedaxiao='0 200 400';
$yuanxingdaxiao='0 200 400';
		
		
		$sql = 'INSERT INTO t_models ( tietu,wangge,yuanxing,tietudaxiao,wanggedaxiao,yuanxingdaxiao)  
				   VALUES ( "'.$tietu.'", "'.$wangge.'", "'.$yuanxing.'", "'.$tietudaxiao.'", "'.$wanggedaxiao.'", "'.$yuanxingdaxiao.'")';
	    $result=M()->execute($sql);
		return $result;
		
	}
	
	public function dropmodels(){
		
		$sql="drop table t_models";
		
		$result=M()->execute($sql);
		return $result;
		
	}
	
	
	public function modelshow(){
		
		$sql='select * from t_models where id=1';
        $list=M()->query($sql);	
		return $list;
	}
	
	public function modelshow1($id){
		
		$id=$id;
		$sql='select * from t_models where id='.$id.'';
        $list=M()->query($sql);	
		//$result = json_encode($list, true);
		
		return $list;
	}
	
}