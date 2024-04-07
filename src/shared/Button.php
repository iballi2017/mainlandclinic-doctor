<button 
type="submit" 
class="
text-white 
bg-primary-500 
hover:bg-primary-600 
dark:bg-primary-600 
dark:hover:bg-primary-700 
focus:ring-1 
focus:outline-none 
focus:ring-primary-300 
font-medium 
rounded-lg 
text-sm 
w-full 
sm:w-auto 
inline-block 
px-5 
sm:px-8 
py-2.5 
text-center 
dark:focus:ring-primary-800">
<?php echo $text; ?>

</button>

<p>
    <?php  ?>
</p>

<?php
$name = "ibrahim";
echo $name, <<<END
 This is a heredoc string.
It can span multiple lines.
END
?>