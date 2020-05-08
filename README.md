# Responsive-me: Another Front End Framework

[![Support Me ^_^]](https://www.patreon.com/elhoub_brahim)

Responsive-me is an Open Source front end Libruary, I Create it For Testing My Front end Skills, You Can Also Show me Yours, By Joining The Github Repositry, & Adding New Features, Or Fixing Bugs. I Will Be Thankfull If You Did it ^_^

## Steps To Run This Website On Your PC

- Clone This Repo, & extract Files.
- Install a Local Server `xampp`, `wampp`, `lampp` ...
- Place The Extracted Files On Your Server root, & Rename The Parent To `www.responsive-me.com` 
- Go To http://localhost/www.responsive-me.com, & Enjoy ^_^

> If You Renamed The Folder `www.responsive-me.com`, Make Sure That You Edit The `$website_url` Variable, in The `classes/config.php` File.

## Responsive-me File Stucture Explaining
  - [Assets Folder](#assets-folder)
  - [Classes Folder](#classes-folder)
  - [Documentaion Folder](#documentation-folder)
  - [Examples Folder](#examples-folder)
  - [Languages Folder](#languages-folder)
  - [Layout Folder](#layout-folder)
  - [Responsive-me src Folder](#responsive-me-src-folder)
  - [Index.php File](#indexphp-file)
  - [Next_ideas.txt File](#next_ideastxt-file)
  - [Responsive-me.rar File](#responsive-merar-file)

## Assets Folder

The Assets Folder Contains Main CSS Files, Images & Libruaries Used In The Documentaion, It Looks Like That :

- `css/style.css`

- `images/...`

- `libs/remix_icons/...`

- `libs/responsive-me/...`

## Classes Folder

The Classes Folder Gathers 3 PHP Classes & One Config File, See The Table Below :

Class File                | Explaining
-------------             | -------------
`Documentation.class.php` | This Class Helps You To Put The Documentation Undecontrol, By Making Relationships Between Docs Papers, & Generating Dynamic Index.
`Examples.class.php`      | This Class Allows You To Add Some Examples As Folders, By Checking The Example Folder & Fetching Data From it.
`Language.class.php`      | This Class is Obligatory To Deal With The Language in The Documentation, It Checks The Choosen Language & Get The Correspondant Lang File Form Languages Folder.
`Control.php`             | This is Not a Class, That File is Needed To Store Some Important Variables Like: Website Url, Language Session, Paths. Also it Load All Previous Classes, & Instantiate The Language Class.

For More Info Just Open The Folder & Read The Code Comments ^_^

## Documentation Folder

That Folder Contains The Responsive-me Documentation, Each File is a Doc Paper.
To Add New Paper, Juste Paste The Code Below & Fill it With Correct Data :

```
 <?php require ($_SERVER['DOCUMENT_ROOT'] . '/www.responsive-me.com classes/control.php'); ?>
  <?php 
    // Go to 'classes/Documentation.class.php' For Info 
    $doc = new Documentation('ar title', 'en title', 'next page', 'prev page');
  ?>
  <?php require ($path_to['layout'] . '/header.php'); ?>

  <div class="documentation">
    <?php require ($path_to['layout'] . '/documentation/docs_header.php'); ?>
    <div class="content">
      <div class="res-container">
        // $page_name is Defined in Language Files as an Array
        // it used To Translate The Doc Content
        <h6 class="subtitle"><?php echo $page_name['sub_1']; ?></h6>
        <div class="para"><?php echo $page_name['para_1']; ?></div>
      </div>
    </div>
    <?php require ($path_to['layout'] . '/documentation/docs_footer.php'); ?>
  </div>

  <!-- Position Absolute -->
  <?php require ($path_to['layout'] . '/documentation/docs_index.php'); ?>
  <?php require ($path_to['layout'] . '/choose_lang.php'); ?>

  <?php require ($path_to['layout'] . '/footer.php'); ?>
```

> To Add a Content in The Doc Paper, Go To The Languages Folder & Add it There,

> Also Don't Forget To Add Your New Doc Paper Link into The `layout/documentation/docs_index.php` file, By Using `generate_index()` function

## Examples Folder
Examples Folder Has Two Childs, The `index.php` file, Which Get All Examples & Show Them.
The Second Child is Another Example Folder, That Folder Contains The Examples Made By The Framework.
To Add New Example Follow The Next Steps :

- Create a Folder Into The Examples Child Folder, & Name it With Your Example Name.
- Add The `index.html` File, & Write Some Content.
- Add `style.css` File, & Make Costomize Your Page.
- Add `screenshot.png`, Image For Your Example.
- After All That, Save Your Files & Compress Your Example Folder, Then Add The Compressed File Under Name Of `download.rar`

If You Want To Inderstand More, Open The Examples Folder & Explore it ^_^

> The `index.html`, `screenshot.png`, `download.rar` Files Are Important To Make Your Example Visible In The Examples Page. 

## Languages Folder

The Languages Folder Contains Two Files `ar.php` & `en.php`, All The Content is Stored Their.

To Add New Content Follow The Next Steps :

- Open The `ar.php` & `en.php` Files.
- Add An Array With New Expressing Name in The `en.php` File.
- Add Some Content Using Multidimentionnal Array.
- Copy The Same Array Name & Content To `ar.php` & Translate Just The Content.
- Save The Files & echo The array Wherever You Want in The Website.

> It's Better To Avoid Naming Your New Array With a Name Of an Existing Array

## Layout Folder

This Folder Contains The Layout Of Our Website, it's Children Are Included in Other Files Like `header.php`, `footer.php` ...

## Responsive-me src Folder

Here is The Core Responsive-me Sass Files, You Can Open it & explore The Files.

## Index.php File

The Landing Page Of Responsive-me.

## Next_ideas.txt File

This File is a Collections Of Some Issues Which i Can't Fix Them Myself, & Some Next Updates.

## Responsive-me.rar File

This is The Final Responsive-me Framework Product ^_^
