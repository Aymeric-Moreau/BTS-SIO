package open_classeroom;

import org.junit.jupiter.api.Test;

class HelloWorldTest {

	@Test
	public void testAjouter() {
		HelloWorld testHelloWorld = new HelloWorld();
		int somme = testHelloWorld.ajouter(2,3);
		assertEquals(5, somme);
	}
	

}
