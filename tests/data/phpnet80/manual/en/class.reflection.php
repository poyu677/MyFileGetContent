HTTP/1.1 200 OK
Server: nginx/1.6.2
Date: Tue, 25 Nov 2014 02:47:20 GMT
Content-Type: text/html; charset=utf-8
Transfer-Encoding: chunked
Connection: close
X-Powered-By: PHP/5.5.11-2
Content-language: en
X-Frame-Options: SAMEORIGIN
Set-Cookie: LAST_LANG=en; expires=Wed, 25-Nov-2015 02:47:20 GMT; Max-Age=31536000; path=/; domain=.php.net
Set-Cookie: COUNTRY=NA%2C203.69.67.240; expires=Tue, 02-Dec-2014 02:47:20 GMT; Max-Age=604800; path=/; domain=.php.net
Link: <http://php.net/reflection>; rel=shorturl
Last-Modified: Fri, 21 Nov 2014 11:17:06 GMT
Vary: Accept-Encoding

1da2
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <title>PHP: Reflection - Manual </title>

 <link rel="shortcut icon" href="http://php.net/favicon.ico">
 <link rel="search" type="application/opensearchdescription+xml" href="http://php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="http://php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="http://php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="http://php.net/manual/en/class.reflection.php">
 <link rel="shorturl" href="http://php.net/reflection">
 <link rel="alternate" href="http://php.net/reflection" hreflang="x-default">

 <link rel="contents" href="http://php.net/manual/en/index.php">
 <link rel="index" href="http://php.net/manual/en/book.reflection.php">
 <link rel="prev" href="http://php.net/manual/en/reflection.extending.php">
 <link rel="next" href="http://php.net/manual/en/reflection.export.php">

 <link rel="alternate" href="http://php.net/manual/en/class.reflection.php" hreflang="en">
 <link rel="alternate" href="http://php.net/manual/pt_BR/class.reflection.php" hreflang="pt_BR">
 <link rel="alternate" href="http://php.net/manual/zh/class.reflection.php" hreflang="zh">
 <link rel="alternate" href="http://php.net/manual/fr/class.reflection.php" hreflang="fr">
 <link rel="alternate" href="http://php.net/manual/de/class.reflection.php" hreflang="de">
 <link rel="alternate" href="http://php.net/manual/it/class.reflection.php" hreflang="it">
 <link rel="alternate" href="http://php.net/manual/ja/class.reflection.php" hreflang="ja">
 <link rel="alternate" href="http://php.net/manual/ro/class.reflection.php" hreflang="ro">
 <link rel="alternate" href="http://php.net/manual/ru/class.reflection.php" hreflang="ru">
 <link rel="alternate" href="http://php.net/manual/es/class.reflection.php" hreflang="es">
 <link rel="alternate" href="http://php.net/manual/tr/class.reflection.php" hreflang="tr">

<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1415938827&amp;f=/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1404368420&amp;f=/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1415938827&amp;f=/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="http://php.net/cached.php?t=1401249623&amp;f=/styles/theme-medium.css" media="screen">

 <!--[if lte IE 7]>
 <link rel="stylesheet" type="text/css" href="http://php.net/styles/workarounds.ie7.css" media="screen">
 <![endif]-->

 <!--[if lte IE 8]>
 <script type="text/javascript">
  window.brokenIE = true;
 </script>
 <![endif]-->

 <!--[if lte IE 9]>
 <link rel="stylesheet" type="text/css" href="http://php.net/styles/workarounds.ie9.css" media="screen">
 <![endif]-->

 <!--[if IE]>
 <script type="text/javascript" src="http://php.net/js/ext/html5.js"></script>
 <![endif]-->

 <base href="http://php.net/manual/en/class.reflection.php">

</head>
<body class="docs ">

<nav id="head-nav" class="navbar navbar-fixed-top">
  <div class="navbar-inner clearfix">
    <a href="/" class="brand"><img src="/images/logo.php" width="48" height="24" alt="php"></a>
    <div id="mainmenu-toggle-overlay"></div>
    <input type="checkbox" id="mainmenu-toggle">
    <ul class="nav">
      <li class=""><a href="/downloads">Downloads</a></li>
      <li class="active"><a href="/docs.php">Documentation</a></li>
      <li class=""><a href="/get-involved" >Get Involved</a></li>
      <li class=""><a href="/support">Help</a></li>
    </ul>
    <form class="navbar-search" id="topsearch" action="/search.php">
      <input type="hidden" name="show" value="quickref">
      <input type="search" name="pattern" class="search-query" placeholder="Search" accesskey="s">
    </form>
  </div>
  <div id="flash-message"></div>
</nav>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.globals.php'>Using Register Globals</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.magicquotes.php'>Magic Quotes</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.xforms.php'>Dealing with XForms</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.safe-mode.php'>Safe Mode</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd>
1ff8
<a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.creditcard.php'>Credit Card Processing</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="reflection.export.php">
          Reflection::export &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="reflection.extending.php">
          &laquo; Extending        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.vartype.php'>Variable and Type Related Extensions</a></li>      <li><a href='book.reflection.php'>Reflection</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/class.reflection.php' selected="selected">English</option>
            <option value='pt_BR/class.reflection.php'>Brazilian Portuguese</option>
            <option value='zh/class.reflection.php'>Chinese (Simplified)</option>
            <option value='fr/class.reflection.php'>French</option>
            <option value='de/class.reflection.php'>German</option>
            <option value='it/class.reflection.php'>Italian</option>
            <option value='ja/class.reflection.php'>Japanese</option>
            <option value='ro/class.reflection.php'>Romanian</option>
            <option value='ru/class.reflection.php'>Russian</option>
            <option value='es/class.reflection.php'>Spanish</option>
            <option value='tr/class.reflection.php'>Turkish</option>
            <option value="help-translate.php">Other</option>
          </select>
        </fieldset>
      </form>
    </div>
    <div class="edit-bug">
      <a href="https://edit.php.net/?project=PHP&amp;perm=en/class.reflection.php">Edit</a>
      <a href="https://bugs.php.net/report.php?bug_type=Documentation+problem&amp;manpage=class.reflection">Report a Bug</a>
    </div>
  </div><div id="class.reflection" class="reference">

 <h1 class="title">The Reflection class</h1>
 

 <div class="partintro"><p class="verinfo">(PHP 5)</p>


  <div class="section" id="reflection.intro">
   <h2 class="title">Introduction</h2>
   <p class="para">
    The reflection class.
   </p>
  </div>


  <div class="section" id="reflection.synopsis">
   <h2 class="title">Class synopsis</h2>


   <div class="classsynopsis">
    <div class="ooclass"></div>


    <div class="classsynopsisinfo">
     <span class="ooclass">
      <strong class="classname">Reflection</strong>
     </span>
     {</div>

    
    <div class="classsynopsisinfo classsynopsisinfo_comment">/* Methods */</div>
    <div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">string</span> <span class="methodname"><a href="reflection.export.php" class="methodname">export</a></span>
    ( <span class="methodparam"><span class="type"><a href="class.reflector.php" class="type Reflector">Reflector</a></span> <code class="parameter">$reflector</code></span>
   [, <span class="methodparam"><span class="type">bool</span> <code class="parameter">$return</code><span class="initializer"> = false</span></span>
  ] )</div>
<div class="methodsynopsis dc-description">
   <span class="modifier">public</span> <span class="modifier">static</span> <span class="type">array</span> <span class="methodname"><a href="reflection.getmodifiernames.php" class="methodname">getModifierNames</a></span>
    ( <span class="methodparam"><span class="type">int</span> <code class="parameter">$modifiers</code></span>
   )</div>

   }</div>


  </div>

 </div>

 















<h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li><a href="reflection.export.php">Reflection::export</a> — Exports</li><li><a href="reflection.getmodifiernames.php">Reflection::getModifierNames</a> — Gets modifier names</li></ul>
</div>

<section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=class.reflection&amp;redirect=http://php.net/manual/en/class.reflection.php"><img src='/images/notes-add@2x.png' alt='add a note' width='12' height='12'> <small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="99616">  <div class="votes">
    <div id="Vu99616">
    <a href="/manual/vote-note.php?id=99616&amp;page=class.reflection&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99616">
    <a href="/manual/vote-note.php?id=99616&amp;page=class.reflection&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99616" title="62% like this...">
    4
    </div>
  </div>
  <a href="#99616" class="name">
  <strong class="user"><em>apmithani at yahoo dot com</em></strong></a><a class="genanchor" href="#99616"> &para;</a><div class="
1000
date" title="2010-08-26 09:05"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom99616">
<div class="phpcode"><code><span class="html">
Here is a code snippet for some of us who are just beginning with reflection. I have a simple class below with two properties and two methods. We will use reflection classes to populate the properties dynamically and then print them:<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">A<br /></span><span class="keyword">{<br />&nbsp; &nbsp; public </span><span class="default">$one </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />&nbsp; &nbsp; public </span><span class="default">$two </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="comment">//Constructor<br />&nbsp; &nbsp; </span><span class="keyword">public function </span><span class="default">__construct</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; </span><span class="comment">//Constructor<br />&nbsp; &nbsp; </span><span class="keyword">}<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="comment">//print variable one<br />&nbsp; &nbsp; </span><span class="keyword">public function </span><span class="default">echoOne</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">one</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br /><br />&nbsp; &nbsp; </span><span class="comment">//print variable two&nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="keyword">public function </span><span class="default">echoTwo</span><span class="keyword">()<br />&nbsp; &nbsp; {<br />&nbsp; &nbsp; &nbsp; &nbsp; echo </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">two</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">;<br />&nbsp; &nbsp; }<br />}<br /><br /></span><span class="comment">//Instantiate the object<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">A</span><span class="keyword">();<br /><br /></span><span class="comment">//Instantiate the reflection object<br /></span><span class="default">$reflector </span><span class="keyword">= new </span><span class="default">ReflectionClass</span><span class="keyword">(</span><span class="string">'A'</span><span class="keyword">);<br /><br /></span><span class="comment">//Now get all the properties from class A in to $properties array<br /></span><span class="default">$properties </span><span class="keyword">= </span><span class="default">$reflector</span><span class="keyword">-&gt;</span><span class="default">getProperties</span><span class="keyword">();<br /><br /></span><span class="default">$i </span><span class="keyword">=</span><span class="default">1</span><span class="keyword">;<br /></span><span class="comment">//Now go through the $properties array and populate each property<br /></span><span class="keyword">foreach(</span><span class="default">$properties </span><span class="keyword">as </span><span class="default">$property</span><span class="keyword">)<br />{<br />&nbsp; &nbsp; </span><span class="comment">//Populating properties<br />&nbsp; &nbsp; </span><span class="default">$a</span><span class="keyword">-&gt;{</span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">()}=</span><span class="default">$i</span><span class="keyword">;<br />&nbsp; &nbsp; </span><span class="comment">//Invoking the method to print what was populated<br />&nbsp; &nbsp; </span><span class="default">$a</span><span class="keyword">-&gt;{</span><span class="string">"echo"</span><span class="keyword">.</span><span class="default">ucfirst</
182e
span><span class="keyword">(</span><span class="default">$property</span><span class="keyword">-&gt;</span><span class="default">getName</span><span class="keyword">())}().</span><span class="string">"\n"</span><span class="keyword">;<br />&nbsp; &nbsp; <br />&nbsp; &nbsp; </span><span class="default">$i</span><span class="keyword">++;<br />}<br /><br /></span><span class="default">?&gt;</span>
</span>
</code></div>
  </div>
 </div></div>

 <div class="foot"><a href="/manual/add-note.php?sect=class.reflection&amp;redirect=http://php.net/manual/en/class.reflection.php"><img src='/images/notes-add@2x.png' alt='add a note' width='12' height='12'> <small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>
    
        <ul class='parent-menu-list'>
                        <li>
                <a href="book.reflection.php">Reflection</a>
    
                                    <ul class='child-menu-list'>
    
                          
                        <li class="">
                            <a href="intro.reflection.php" title="Introduction">Introduction</a>
                        </li>
                          
                        <li class="">
                            <a href="reflection.setup.php" title="Installing/Configuring">Installing/Configuring</a>
                        </li>
                          
                        <li class="">
                            <a href="reflection.constants.php" title="Predefined Constants">Predefined Constants</a>
                        </li>
                          
                        <li class="">
                            <a href="reflection.examples.php" title="Examples">Examples</a>
                        </li>
                          
                        <li class="">
                            <a href="reflection.extending.php" title="Extending">Extending</a>
                        </li>
                          
                        <li class="current">
                            <a href="class.reflection.php" title="Reflection">Reflection</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionclass.php" title="ReflectionClass">ReflectionClass</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionzendextension.php" title="ReflectionZendExtension">ReflectionZendExtension</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionextension.php" title="ReflectionExtension">ReflectionExtension</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionfunction.php" title="ReflectionFunction">ReflectionFunction</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionfunctionabstract.php" title="ReflectionFunctionAbstract">ReflectionFunctionAbstract</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionmethod.php" title="ReflectionMethod">ReflectionMethod</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionobject.php" title="ReflectionObject">ReflectionObject</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionparameter.php" title="ReflectionParameter">ReflectionParameter</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionproperty.php" title="ReflectionProperty">ReflectionProperty</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflector.php" title="Reflector">Reflector</a>
                        </li>
                          
                        <li class="">
                            <a href="class.reflectionexception.php" title="ReflectionException">ReflectionException</a>
                        </li>
                            
                    </ul>
                    
            </li>
                    </ul>
    </aside>


  </div><!-- layout -->
         
  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/copyright.php">Copyright &copy; 2001-2014 The PHP Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/mirrors.php">Mirror sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
 <!-- External and third party libraries. -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1387527612&amp;f=/js/ext/modernizr.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1385000409&amp;f=/js/ext/hogan-2.0.0.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1389722415&amp;f=/js/ext/typeahead.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1388312428&amp;f=/js/ext/mousetrap.min.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1403329231&amp;f=/js/search.js"></script>
<script type="text/javascript" src="http://php.net/cached.php?t=1410183606&amp;f=/js/common.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

</body>
</html>


0

