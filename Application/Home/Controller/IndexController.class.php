<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		
		$Dat1a =  M('E_2log1'); //M('E'); //M('Jsrec'); //M('Data'); // 实例化Data数据模型
        $this->dat1a = $Dat1a->select();
		
		foreach( $this->dat1a  as $d1a) {
//			echo '<a href="/index.php/Index/index/creat1updat1/dat1tim1/';
			echo '<a href="/index.php/Home/index/creat1updat1/dat1tim1/';
			echo $d1a['dat1time'];
			echo '">';
			echo date("y-m-d H:i:s",$d1a['dat1time']);
			echo '</a>';
			
			//
			
			echo '</a>';
			
				foreach($d1a as $d2k=>$d2b) {
					echo "&nbsp;|";
					echo $d2k;
					echo ":";
					echo $d2b;
				}
			
			echo "&nbsp;=||";
			echo "<br />";
			
		}//foreach( $dat1a as $d1a
		
		
//        $this->display();
		
		
//
    }//public function index(
	
	
	// creat1updat1:
	public function creat1updat1()
	{
		$Lis1t= M('e_2log1');
		$lis21= $Lis1t
//			->where('dat1time','ELT',$_GET['dat1tim1'] ) //参数之前（小于等于参数时，重建表格所有记录-重建纪录！）
			->where('dat1time <= %s', $_GET['dat1tim1'] ) //参数之前（小于等于参数时，重建表格所有记录-重建纪录！）
			->select();
		
//		print_r($this->$lis2);
/*			EQ 	等于（=）
NEQ 	不等于（<>）
GT 	大于（>）
EGT 	大于等于（>=）
LT 	小于（<）
ELT 	小于等于（<=）
LIKE 	模糊查询
[NOT] BETWEEN 	（不在）区间查询
[NOT] IN 	（不在）IN 查询
EXP 	表达式查询，支持SQL语法
*/			
//		$list = Db::table('a1tl_jj1_0log1')
//			->where('atlaststate','=',1)
//			->where('dat1time','<=', $_GET['dat1tim1'] )
//			->where($_GET['dat1tim1'],'>=','dat1time' )
//			->order('timestamp asc')
//			->select();
			
	//清空表 :
//		Db::execute('TRUNCATE table a1tl_jj1user1yeji02');
		
//		print_r($dat3a);
		echo "<br />";
		
		// 删除数据
//		Db::table('a1tl_jj1user1yeji02')
//			->where('yId2', '>',0)
//			->delete();

		
//		$Lis33t=M('e_2log02'); //$Lis2t=M('dg_e_2log02');
//		$Lis33t->create();

		$Lis33t=M('e_2log02');
			$Lis33t->where('id >%d',0)->delete();		
		foreach($lis21 as $ld2a ) {

					$Lis33t->create();
//					print_r($ld2a);
					$Lis33t->username = $ld2a['username'];
/*				Db::table('a1tl_jj1user1yeji02')
				->insert([
						
				//下面填写 日志重建（重现内容）20160508
						'userid'=> $lda['userid'],
						'yeji'=>$lda['yeji'],
						'jiangj'=>$lda['jiangj'],
						
					//日志重建（重现内容）写完毕20160508
						'timestamp'=>$lda['timestamp'],
						'dat1time'=>$lda['dat1time'],
						'rcud'=>$lda['rcud'],
						'atlaststate'=>$lda['atlaststate'],
						'yid2'=>$lda['yid01']
				]) ; */
				
			$Lis33t->add();
		}
		
		//------------
				echo "日志重建->显示：";
		echo "<br />";
	
		$Dat34= M('E_2log02'); //$Dat33= M('dg_e_2log02');
		$dat3a= $Dat34->select();
//		$dat3a     = Db::table('a1tl_jj1user1yeji02')->select();
        $this->assign('resul3t',$dat3a);
	
		foreach(  $dat3a as $da3) {
			echo '<a href="index.php/Index/index/creat1updat1/dat1tim1/';
			echo '<a href="index.php/Index/index/';
			echo $da3['dat1time'];
			echo '">';
			echo '返回:'.$da3['timestamp'];
			
			echo '</a>';
			
				foreach($da3 as $d31) {
					echo "&nbsp;|&nbsp;";
					echo $d31;
				}
			
			echo "&nbsp;=||";
			echo "<br />";
		}//foreach(  $dat2a as $da
		echo "<br />";
		
		
		//============
	}//public function creat1updat1(
	
	
	
}//class IndexController extends Controller