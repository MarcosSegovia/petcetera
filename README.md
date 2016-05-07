#Petcetera

A php library to provide output raw concatenation of elements with commas and terminators of different languages.

## Installation

```
$ composer require marcossegovia/petcetera;
```
## Usage

Given an array of string elements like the following:

```
    $my_array_of_string_elements = [
        'element1',
        'element2',
        'element3',
        'element4'
    ];
```

Then you only have to instantiate Petcetera and use call it as a function, on:

- 1st parameter is your array of elements.
- 2on parameter is a locale string specifying the language you want to provide for the terminator.

```
        $petcetera_instance   = new Petcetera();
        $resulting_string = $petcetera_instance($my_array_of_string_elements, 'en_GB'); // outputs: element1, element2, element3 and element4
        $resulting_string2 = $petcetera_instance($my_array_of_string_elements, 'es_ES'); //outputs: element1, element2, element3 y element4
```

