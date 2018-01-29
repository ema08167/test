/* 大人料金が400円、子供料金が100円の遊園地
Aグループ 大人3人　子供4人
Bグループ 大人2人  子供2人
Cグループ　大人5人 子供3人
それぞれのグループの合計金額を、関数を使い、○○円ですと出力せよ*/
function goukeikingaku (otona, kodomo){
    return "の合計金額は、" + (400 * otona + 100 * kodomo )+ " 円です。";
}
document.write("Group A" + goukeikingaku (3,4 ));
document.write("<br>");
document.write("Group B" + goukeikingaku (2,2 ));
document.write("<br>");
document.write("Group C" +goukeikingaku (5,3) );
