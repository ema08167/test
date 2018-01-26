
public class Test {

	public static void main(String[] args) {

	Person taro=new Person();
	taro.name="taro";
	taro.age=18;
	System.out.println(taro.name);
	System.out.println(taro.age);

	Person jiro=new Person("jiro",20);
	System.out.println(jiro.name);
	System.out.println(jiro.age);

    Person saburo=new Person("saburo");
    System.out.println(saburo.name);
    System.out.println(saburo.age);

    Person ichiro=new Person(25);
    System.out.println(ichiro.name);
    System.out.println(ichiro.age);

    Person hanako=new Person(17,"hanako");
     System.out.println(hanako.name);
    	System.out.println(hanako.age);




	Person ema=new Person();
	ema.name="魚部恵麻";
	ema.age=27;
	System.out.println(ema.name);
	System.out.println(ema.age);
    taro.talk();
    taro.walk();
    taro.run();

    Robot aibo=new Robot();
    aibo.name="aibo";
    System.out.println(aibo.name);
    aibo.talk();
    aibo.walk();
    aibo.run();

    Robot asimo=new Robot();
    asimo.name="asimo";
    System.out.println(asimo.name);
    asimo.talk();
    asimo.walk();
    asimo.run();





	}



}
