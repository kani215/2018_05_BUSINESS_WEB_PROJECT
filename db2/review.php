<?php 
$music=$_GET["music"];
$comment=$_GET["comment"];
$mysqli = new mysqli("localhost","db2","2017100878","db2");
mysqli_set_charset($mysqli,"utf8");

if (mysqli_connect_errno()) {
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();      
} else {	
        $qry1 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Red Velvet(레드벨벳)                 ','The Perfect Red Velvet- The 2nd Album Repackage','$comment')";mysqli_query($mysqli, $qry1 );      
        	  																												                                 					                           
        $qry2 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Cardi B(카디 비)                    ','Invasion Of Privacy','$comment')";mysqli_query($mysqli, $qry2 );		                  
        	  																												                                 												  																												
        $qry3 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Post Malone(포스트 말론)              ','beerbongs & bentleys','$comment')";mysqli_query($mysqli, $qry3 );                
        	  																												                                 					                           
        $qry4 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Ella Mai(엘라마이)                   ','Ready','$comment')";mysqli_query($mysqli, $qry4 );
        	  																												                                 					                           
        $qry5 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Nicki Minaj(니키 미나즈)              ','Chun-Li','$comment')";mysqli_query($mysqli, $qry5 );  
              																												                                 					        					  																																      
        $qry6 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','The Chainsmokers(체인스모커스)         ','Collage','$comment')";mysqli_query($mysqli, $qry6 );   
        	  																												                                 					                           
        $qry7 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Taylor Swift(테일러 스위프트)           ','reputation','$comment')";mysqli_query($mysqli, $qry7 );   
        	  																												                                 					                           
        $qry8 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','WINNER                           ','EVERYD4Y','$comment')";mysqli_query($mysqli, $qry8 );   
        	  																												                                 												  																														
        $qry9 = "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','방탄소년단                            ','LOVE YOURSELF 轉 'Tear'','$comment')";mysqli_query($mysqli, $qry9 );   
        	  																												                                 					                           
        $qry10= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Lil Dicky(릴 디키)                  ','Freaky Friday','$comment')";mysqli_query($mysqli, $qry10);   
        	  																												                                 					                           
        $qry11= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Marshmello & Anne-Marie          ','Speak Your Mind[Deluxe]','$comment')";mysqli_query($mysqli, $qry11);   
              																												                                 					        					  																																     
        $qry12= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Maroon 5(마룬 파이브)                 ','Red Pill Blues [Deluxe Edition]','$comment')";mysqli_query($mysqli, $qry12);   
        	  																												                                 					                           
        $qry13= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Drake(드레이크)                      ','Scary Hours','$comment')";mysqli_query($mysqli, $qry13);   
        	  																												                                 					                           
        $qry14= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Fitz & The Tantrums              ','Fitz and The Tantrums [Deluxe]','$comment')";mysqli_query($mysqli, $qry14);   
        	  																												                                 												  																														
        $qry15= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Camila Cabello(카밀라 카베요)          ','Camila','$comment')";mysqli_query($mysqli, $qry15);   
        	  																												                                 					                           
        $qry16= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Kane Brown                       ','Kane Brown[Deluxe Edition]','$comment')";mysqli_query($mysqli, $qry16);   
        	  																												                                 					                           
        $qry17= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Cardi B & Bad Bunny & J Balvin   ','Invasion Of Privacy','$comment')";mysqli_query($mysqli, $qry17);   
              																												                                 					        					  																														      
        $qry18= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Drake(드레이크)                      ','I'm Upset','$comment')";mysqli_query($mysqli, $qry18);                                                                                                            
        	  																												                                 					                                                                                                                              
        $qry19= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Shawn Mendes(션 멘데스)              ','Shawn Mendes','$comment')";mysqli_query($mysqli, $qry19);   
        	  																												                                 					                           
        $qry20= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','DEAN(딘)                          ','instagram','$comment')";mysqli_query($mysqli, $qry20);   
        	  																												                                 												  																														
        $qry21= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','헤이즈(HEIZE)                       ','바람','$comment')";mysqli_query($mysqli, $qry21);   
        	  																												                                 					                           
        $qry22= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','(여자)아이들                          ','I am','$comment')";mysqli_query($mysqli, $qry22);   
        	  																												                                 					                           
        $qry23= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','볼빨간사춘기                           ','Red Diary Page.2','$comment')";mysqli_query($mysqli, $qry23);   
              																												                                 					        					  																																      
        $qry24= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','BlocBoy JB                       ','Look Alive(feat.Drake)','$comment')";mysqli_query($mysqli, $qry24);   
        	  																												                                 					           					  																																
        $qry25= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Khalid & Normani                 ','Love, Simon OST','$comment')";mysqli_query($mysqli, $qry25);  
        	  																												                                 					                           
        $qry26= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','혁오(HYUKOH)                       ','24:How to find true love and happiness','$comment')";mysqli_query($mysqli, $qry26);   
        	  																												                                 												  																														
        $qry27= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Juice WRLD                       ','Lucid Dreams','$comment')";mysqli_query($mysqli, $qry27);   
        	  																												                                 					                           
        $qry28= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Bebe Rexha & Florida Georgia Line','All Your Fault: Pt.2','$comment')";mysqli_query($mysqli, $qry28);   
        	  																												                                 					                           
        $qry29= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Bazzi                            ','COSMIC','$comment')";mysqli_query($mysqli, $qry29);   
              																												                                 					        					  																																
        $qry30= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Camila Cabello(카밀라 카베요)          ','Camila','$comment')";mysqli_query($mysqli, $qry30);   
        	  																												                                 					                           
        $qry31= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Dua Lipa(두아 리파)                  ','Dua Lipa [Deluxe]','$comment')";mysqli_query($mysqli, $qry31);   
        	  																												                                 					                           
        $qry32= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Drake(드레이크)                      ','Nice For What','$comment')";mysqli_query($mysqli, $qry32);   
        	  																												                                 												  																														
        $qry33= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Ariana Grande(아리아나 그란데)          ','No Tears Left To Cry','$comment')";mysqli_query($mysqli, $qry33);   
        	  																												                                 					                           
        $qry34= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Calvin Harris & Dua Lipa         ','One Kiss','$comment')";mysqli_query($mysqli, $qry34);   
        	  																												                                 					                           
        $qry35= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Luke Combs                       ','This One's For You','$comment')";mysqli_query($mysqli, $qry35);   
              																												                                 					        					  																																      
        $qry36= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Ed Sheeran(에드 시런)                ','Perfect Duet(with Beyonce)','$comment')";mysqli_query($mysqli, $qry36);                                                                                                                
        	  																												                                 					                           
        $qry37= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Rich The Kid                     ','Plug Walk','$comment')";mysqli_query($mysqli, $qry37);   
        	  																												                                 					                           
        $qry38= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Kendrick Lamar & The Weeknd      ','Black Panther The Album Music From And Inspired By Kendrick Lamar & SZA & The Weeknd','$comment')";mysqli_query($mysqli, $qry38);   
        	  																												                                 												  																														
        $qry39= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Post Malone(포스트 말론)              ','Psycho','$comment')";mysqli_query($mysqli, $qry39);   
        	  																												                                 					                           
        $qry40= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Post Malone(포스트 말론)              ','beerbongs & bentleys','$comment')";mysqli_query($mysqli, $qry40);   
        	  																												                                 					                           
        $qry41= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','청하                               ','Offset','$comment')";mysqli_query($mysqli, $qry41);                                             
              																												                                 					        					  																															 
        $qry42= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Ed Sheeran(에드 시런)                ','÷ [Deluxe] ','$comment')";mysqli_query($mysqli, $qry42);   
        	  																												                                 					                           
        $qry43= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Zedd & Grey & Maren Morris       ','The Middle','$comment')";mysqli_query($mysqli, $qry43);   
        	  																												                                 					                           
        $qry44= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Childish Gambino(차일디시 감비노)       ','This Is America','$comment')";mysqli_query($mysqli, $qry44);   
        	  																												                                 												  																														
        $qry45= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Imagine Dragons(이매진 드래곤스)        ','Evolve','$comment')";mysqli_query($mysqli, $qry45);   
        	  																												                                 					                           
        $qry46= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Maroon 5(마룬파이브)                  ','Red Pill Blues[Deluxe Edition]','$comment')";mysqli_query($mysqli, $qry46);   
        	  																												                                 					                           
        $qry47= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Migos(미고스)                       ','Culture II','$comment')";mysqli_query($mysqli, $qry47);   
              																												                                 					        					  																																      
        $qry48= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','TWICE(트와이스)                      ','What is Love?','$comment')";mysqli_query($mysqli, $qry48);
                                                                                                                                                                                                              
        $qry49= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Imagine Dragons(이매진 드래곤스)        ','Evolve','$comment')";mysqli_query($mysqli, $qry49);
			  																												                                 			                                   
        $qry50= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Lil Baby & Drake                 ','Harder Than Ever','$comment')";mysqli_query($mysqli, $qry50);
			  																												                                 										       
        $qry51= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','멜로망스(MeloMance)                  ','투유 프로젝트-슈가맨2 Part.2','$comment')";mysqli_query($mysqli, $qry51);
			  																												                                 			                                   
        $qry52= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','먼데이 키즈(Monday Kiz)               ','가을 안부','$comment')";mysqli_query($mysqli, $qry52);
			  																												                                 			                                   
        $qry53= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','장덕철                              ','그날처럼','$comment')";mysqli_query($mysqli, $qry53);
     		  																												                                 			        					       
        $qry54= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','빈첸(VINXEN)                       ','그대들은 어떤 기분이신가요','$comment')";mysqli_query($mysqli, $qry54);
			  																												                                 			                                   
        $qry55= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','로이킴                              ','그때 헤어지면 돼','$comment')";mysqli_query($mysqli, $qry55);
			  																												                                 			                                   
        $qry56= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','BIGBANG                          ','꽃 길','$comment')";mysqli_query($mysqli, $qry56);
			  																												                                 										       
        $qry57= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','정승환                              ','그리고 봄','$comment')";mysqli_query($mysqli, $qry57);
			  																												                                 			                                   
        $qry58= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','SHINee(샤이니)                      ',''The Story of Light'EP.1-The 6th Album','$comment')";mysqli_query($mysqli, $qry58);
			  																												                                 			                                   
        $qry59= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','BLACKPINK                        ','마지막처럼','$comment')";mysqli_query($mysqli, $qry59);
     		  																												                                 			        					       
        $qry60= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','폴킴(Paul Kim)                     ',''키스 먼저 할까요?'OST Part.3','$comment')";mysqli_query($mysqli, $qry60);
			  																												                                 			                                   
        $qry61= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Wanna One(워너원)-더힐                ','1÷X=1(UNDIVIDED) ','$comment')";mysqli_query($mysqli, $qry61);
			  																												                                 			                                   
        $qry62= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','여자친구(GFRIEND)                    ','여자친구 The 6th Mini Album 'Time for the moon night'','$comment')";mysqli_query($mysqli, $qry62);
			  																												                                 										       
        $qry63= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','마마무(Mamamoo)                     ','Yellow Flower','$comment')";mysqli_query($mysqli, $qry63);
			  																												                                 			                                   
        $qry64= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','김하온(HAON)                        ','고등래퍼2 Final','$comment')";mysqli_query($mysqli, $qry64);
			  																												                                 			                                   
        $qry65= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','에이오에이(AOA)                       ','BINGLE BANGLE','$comment')";mysqli_query($mysqli, $qry65);
     		  																												                                 			        					       
        $qry66= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','펜타곤(PENTAGON)                    ','Positive','$comment')";mysqli_query($mysqli, $qry66);
			  																												                                 			                                   
        $qry67= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','모모랜드(MOMOLAND)                   ','GREAT!','$comment')";mysqli_query($mysqli, $qry67);
			  																												                                 			                                   
        $qry68= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','iKON                             ','Return','$comment')";mysqli_query($mysqli, $qry68);
			  																												                                 										       
        $qry69= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','멜로망스(MeloMance)                  ','Moonlight','$comment')";mysqli_query($mysqli, $qry69);
			  																												                                 			                                   
        $qry70= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','용준형                              ','소나기(Feat.10cm)','$comment')";mysqli_query($mysqli, $qry70);
			  																												                                 			                                   
        $qry71= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','유빈(Yubin)                        ','都市女子','$comment')";mysqli_query($mysqli, $qry71);
     		  																												                                 			        					       
        $qry72= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','볼빨간사춘기                           ','Red Diary Page.2','$comment')";mysqli_query($mysqli, $qry72);
			  																												                                 			           					       
        $qry73= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','멜로망스(MeloMance)                  ','욕심','$comment')";mysqli_query($mysqli, $qry73);
			  																												                                 			                                   
        $qry74= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','펀치(Punch)                        ','이 밤의 끝','$comment')";mysqli_query($mysqli, $qry74);
			  																												                                 										       
        $qry75= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','크러쉬(Crush)                       ','잊을만하면','$comment')";mysqli_query($mysqli, $qry75);
			  																												                                 			                                   
        $qry76= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','윤종신                              ','LISTEN 010 좋니','$comment')";mysqli_query($mysqli, $qry76);
			  																												                                 			                                   
        $qry77= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','로꼬&화사(마마무)                       ','건반 위의 하이에나 Part.4','$comment')";mysqli_query($mysqli, $qry77);
     		  																												                                 			        					       
        $qry78= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','닐로(Nil_O)                        ','About You','$comment')";mysqli_query($mysqli, $qry78);
			  																												                                 			                                   
        $qry79= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Wanna One(워너원)-트리플포지션            ','1÷X=1(UNDIVIDED) ','$comment')";mysqli_query($mysqli, $qry79);
			  																												                                 			                                                                               
        $qry80= "INSERT INTO review(customerid,reviewdate,musicname,artist,album,reviewtext) VALUES('wjlee',now(),'$music','Wanna One(워너원)                   ','1÷X=1(UNDIVIDED) ','$comment')";mysqli_query($mysqli, $qry80);     
		       
}       echo"finished";                                                                      
                                                                                 
?>