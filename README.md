# Writing a README samples

**Version 1.0.0**

This simple php application can generate a sequence of numbers and manipulate the outcome using multiple tools and configurations

### How To Run
* Using a Browser: 
you can run the application in a browser by calling the "run.php" script in the browser
  
* Using the command line
navigate to the directory of the script and run the following command to get the result
  "php run.php"
### Configuration
the script will generate a list of numbers from 1-100 unless configured otherwise by adding two
parameters to the <i><b>SequenceGenerator</b></i> object which indicates the begining and the end of the sequence
```
$numbers = new SequenceGenerator(50,60)
```
**Changing the output of the sequence**
by using a class of the type <i><b>iConfigurator</b></i> you can change the behaviour of the list
by passing the class with the required configurations as a parameter to the <i><b>generate()</b></i> function

By default the <i><b>MultiplierConfigurator</b></i> class can replace any number in the sequence when it matches a multiplier with a word that the user specifies
by supplying an array as a parameter to the object , the array contains the multiplier and the corresponding word that will replace the matching number like follows

```
new MultiplierConfigurator([3=>"Fizz", 5=>"Buzz"]
```

### Contribute

this application functionality can be extended by adding more <i><b>IConfigurator</b></i> classes with <i>config()</i> method that can manipulate the generated sequence

---

## License & copyright
© Created by Molham Alcharabati