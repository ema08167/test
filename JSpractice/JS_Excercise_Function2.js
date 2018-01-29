function goukeikingaku(otona, kodomo){
    return "の合計金額は、" + (500 * otona + 200 * kodomo) + "円です。"; 
}
document.write("Group A" + goukeikingaku(2,4));
document.write("<br>");
document.write("Group B" + goukeikingaku(1,5));
document.write("<br>");
document.write("Group C" + goukeikingaku(3,7));