# WI-51015

A small project to reproduce the issue reported at https://youtrack.jetbrains.com/issue/WI-51015


## Steps

* Open src/StorageConvertor.php
* Attempt to go to the definition of the getId() call on line 27 (this should fail)
* Open src/StorageConvertorInterface.php
* Copy the docblock for the store() method
* Go back to src/StorageConvertor.php and paste the docblock to replace the inherited one
* Attempt to go to the definition of the getId() call on line 27 (this now works)
