
public class sequence {

	public static void main(String[] args) {
		// 配列
          String [] name=new String[3];
          name[0]="田中";
          name[1]="高橋";
          name[2]="斉藤";
          System.out.println(name [0]);

          String[] name1={"田中","高橋","斉藤"};
             System.out.println(name1[0]);

          char[]c={'X','Y','Z'};
             System.out.println(c[0]);

           char[]c1={'X','Y','Z'};
               System.out.println(c1[1]);

          char[]c2={'X','Y','Z'};
             System.out.println(c2[2]);

           int[] i= {1,5,10};
              System.out.println(i[0]);

           int [] i2={1,5,10};
               System.out.println(i2[1]);

            String[]name2={"田中","高橋","斉藤"};
            name2[0]="加藤";
                 System.out.println(name2[0]);

            String[][]country=
            	{
            			{"日本","タイ"},
            			{"アメリカ","ブラジル"},
            			{"フランス","ロシア"}
            	};
             System.out.println(country[0][0]);

             String[][]country2=
            	 {
            			 {"日本","タイ"},
            			 {"アメリカ","ブラジル"},
            			 {"フランス","ロシア"}
            	 };
             System.out.println(country2[0][1]);

              String[][]country3=
            	  {
            			  {"日本","タイ"},
            			  {"アメリカ","ブラジル"},
            			  {"フランス","ロシア"}
            	  };
              System.out.println(country3[1][0]);

               String[][]country4=
            	   {
            			   {"日本","タイ"},
            			   {"アメリカ","ブラジル"},
            			   {"フランス","ロシア"}
            	   };
            	 System.out.println(country4[2][1]);

            	 String[][] country5=new String[3][2];
            	 country5[0][0]="日本";
            	 country5[0][1]="タイ";
            	 country5[1][0]="アメリカ";
            	 country5[1][1]="ブラジル";
            	 country5[2][0]="フランス";
            	 country5[2][1]="ロシア";
            	System.out.println(country5[0][0]);

           String[][]country6=new String[3][2];
           country6[0][0]="日本";
           country6[0][1]="タイ";
           country6[1][0]="アメリカ";
           country6[1][1]="ブラジル";
           country6[2][0]="フランス";
           country6[2][1]="ロシア";
             System.out.println(country6[1][1]);
	}

}
