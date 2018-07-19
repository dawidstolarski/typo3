Enhanced TYPO3 save buttons (EXT:unroll)
========================================

This extension for TYPO3 CMS 7+ adds options to TYPO3's save buttons:

- unroll them from dropdown
- just display icons (for each button)
- change the button order

It is an enhanced version of `EXT:rx_unrollsavebuttons <https://typo3.org/extensions/repository/view/rx_unrollsavebuttons>`_
with more functionality, like reordering the buttons. The original extension rx_unrollsavebuttons became obsolete and
Markus Klein, author of this extension, joined development of EXT:unroll.


Screenshot
----------

.. image:: http://i.imgur.com/lxQ0D4a.gif


Installation
------------

You can fetch EXT:unroll by adding "instituteweb/unroll" as dependency to your root composer.json.

::

    "require": {
        "typo3/typo3-cms": "^8.7",
        "instituteweb/unroll": "^2.0"
    },


Or you can fetch and install it from TER.

This extension is compatible with all TYPO3 versions since 7.6 LTS, which introduced
the button dropdowns of the Bootstrap CSS framework.


Extension settings
------------------

EXT:unroll has some options you can set in extension manager:

* **Buttons:** Defines the order of buttons. Default: `_savedok,_savedokview,_savedoknew,_saveandclosedok`
* **Unroll:** When checked, all saving buttons are displayed in a row. The dropdown is gone. Default: `true`
* **Show label of "save" button:** When checked, the icon and label is displayed for this button. Default: `true`
* **Show label of "save and preview":** When checked, the icon and label is displayed for this button. Default: `true`
* **Show label of "save and new":** When checked, the icon and label is displayed for this button. Default: `true`
* **Show label of "save and close":** When checked, the icon and label is displayed for this button. Default: `true`
* **Allow custom user settings:** When checked, each backend user can set its own settings. Default: `false`


Options in your user settings, when "Allow custom user settings" is enabled:

.. image:: http://i.imgur.com/BPmSjju.png

So each individual backend user can change its own preferences of how to unroll and display save buttons.



Vagrant setup
-------------

A Vagrantfile is shipped with this extension. This allows you to run a VirtualBox machine very easy, to test and develop
this extension. Just open http://127.0.0.1:8080 in your browser after you've performed a

::

    vagrant up



On Windows you need to install the vagrant plugin **winnfsd** and **bindfs** before you can vagrant up:

::

    vagrant plugin install vagrant-winnfsd
    vagrant plugin install vagrant-bindfs

Your files are automatically synced to `/var/www/html/typo3conf/ext/unroll`.

**Caution! Files are synched in both directions!** Deleting files in machine will also delete them on host machine!


**Credentials**

- for TYPO3: **admin** / **password** (also install tool password)
- for Database: **root** / - (no password set)
- for SSH: **vagrant** / **vagrant**
- TYPO3 path: `/var/www/html/` (uses composer, you can update with `composer update`).


Links
-----

* Issue Tracker: https://bitbucket.org/InstituteWeb/unroll/issues
* Source code: https://bitbucket.org/InstituteWeb/unroll
