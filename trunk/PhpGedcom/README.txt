=======================================================
    PHP GEDCOM Library

    Version 1.0
    Copyright (C) 2010 John Finlay

=======================================================

CONTENTS
     1.  SUPPORT
     1.  LICENSE
     2.  SYSTEM REQUIREMENTS
     3.  USERS GUIDE
     4.  DATA MODEL

-------------------------------------------------------
SUPPORT

This code was ported from the JavaGedcom library released under the
GedLynk project.
  
Questions and comments regarding this code may be posted to forums
or mailing lists at the PhpGedView project.

-------------------------------------------------------
LICENSE

This library is free software; you can redistribute it and/or
modify it under the terms of the GNU Lesser General Public
License as published by the Free Software Foundation; either
version 2.1 of the License, or (at your option) any later version.

This library is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
Lesser General Public License for more details.

See LICENSE.txt for the full license.  If you did not receive a 
copy of the license with this code, you may find a copy online
at http://www.opensource.org/licenses/lgpl-license.php

-------------------------------------------------------
SYSTEM REQUIREMENTS

This library requires PHP 5.3 or higher.

There are no other prerequisites for using this library.

-------------------------------------------------------
USERS GUIDE

This library allows for parsing and handling GEDCOM data.

For example see the LoadExample.php file.
 
There are several helper classes provided which help with parsing GEDCOM data:
 ParseGedcom - useful for loading GEDCOM data from a file
 Parsing - useful for parsing data from a GEDCOM record
 GedcomListener - defines the listener interface which gets fired when certain
 	GEDCOM data is encountered during parsing.
 	
To parse GEDCOM from a file use the ParseGedcom::loadFile() method.
  $gedcom = $loader->loadFile($file); 

To get a particular piece of GEDCOM data use the Parsing::getGedcomValue() 
method.  For example, to get the DATE from a BIRT record you would do
something like this:
$date = Parsing::getGedcomValue("BIRT:DATE", 1, 
	$person->getGedcomString(), "", false);

The first parameter of the getGedcomValue() method takes a colon delimited
list of GEDCOM tags where each subsequent tag is a subordinate of the previous
tag in the GEDCOM hierarchy.  The second parameter is the GEDCOM level where 
the first tag is expected to be found.

-------------------------------------------------------
DATA MODEL

GEDCOM inherently has a data model of individuals, families, and sources.
This library does not attempt to directly model all of the complexities of
the GEDCOM model.

This library simplifies the GEDCOM data model down to three main classes:
Gedcom, Record, and Assertion.  The Gedcom class represents a collection
or set of level 0 records.  Level 0 records are represented by the Record
class.  Level 0 records have a collection of level 1 records represented by 
the Assertion class.  So, a Gedcom has Records, and Records have Assertions.

Gedcom <---- Record <---- Assertion

Level 0 Records can be one of 3 types: Individual, Family, or Record.  Record
is currently a catch-all for all SOUR and other level 0 records.  These
alternate records types may eventually be modeled in the future.  

Level 1 Assertion records have been subclassed into various types.  Assertion
is an abstract class and so cannot be instantiated without one of the concrete
subclasses.  Currently the subclasses are:
AssertionLink, Event, Name, and RemoteLink

We are currently not modeling anything beyond level 1 records.  Anything 
below level 1 can be found in the "gedcom" field and can be retrieved using 
the Parsing library.  

An AssertionLink represents all of the level 1 cross-linking
references in GEDCOM data such as FAMC, FAMS, CHIL, ASSO, etc.

An Event represents all of the level 1 Facts or Events
in GEDCOM data such as BIRT, DEAT, OCCU, etc.  In the GEDCOM model
"Events" have Dates and Places while "Facts" have detail information.
In this library we combine Facts and Events together as Facts may 
sometimes have dates and places, while events sometimes have detail.

A Name represents the structure for a GEDCOM NAME record.  We currently
only support the GIVN and SURN tags in this API.  In the future, support
for the other parts of GEDCOM will likely be added.

A RemoteLink is an Assertion which represents that the parent record
is linked to another record in another data source.  These links are 
stored in Level 1 RFN tags in the GEDCOM model.  This type is primarily
used to support remote linking or cross-linking of GEDCOM record.  This
cross-linking would signify that this record represents the same record
in another data source and allows for record synchronization.

=======================================================