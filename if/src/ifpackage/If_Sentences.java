package ifpackage;

public class If_Sentences {

	public static void main(String[] args) {
		// if文の練習
		//変数aが20より小さい場合、Aと表示
		int a =10;
		if (a < 20){
			System.out.println("A");
		}

		//変数a2が30以下の場合、Bと表示
		int a2=20;
		if (a2 <= 30){
			System.out.println("B");
		}

		//もし、文字列bが山田だった場合、山田さんを表示
		String b="山田";
		if(b.equals("山田")){
			System.out.println(b+"さん");
		}


		//変数a3が10未満かつ、3より大きい→Aと表示
		int a3 =5;
		if (a3<10 && 3<a3){
			System.out.println("A");
		}

		//もし、ある数a4が5以上である、または0以下のどちらか→Bと表示
		int a4=5;
		if(a4>=5 || a4<=0){
			System.out.println("B");
		}

		//変数a3が10未満かつ、3より大きい→Aと表示
		int a5 =5;
		if (a5<10 && 3<a5){
			System.out.println("A");
			}

		//ある変数a6が8より大きい場合→A そうでない場合で10未満の場合→B
		int a6 =7;
		if (a6>8){
			System.out.println("A");
		}else if (a6<10){
			System.out.println("B");
		}

//変数a7が8より大きい→A そうでない場合で、10未満の場合→B
		int a7=11;
		if (a7>8){
		    System.out.println("A");
		}else if(a7<10){
		    System.out.println("B");

		   }

//変数a8が5より大きい→A そうでない→Z
        int a8=3;
        if(a8>5)
	}
}




