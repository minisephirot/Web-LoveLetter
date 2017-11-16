<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_18e23267d467f8a5f2c2f2f08a0a426cef5f4f3c6afbb8eadd47ac95082739e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9bf113dcad791018a08ef5987845db36deb0fe68f2fb5633d9e3ef2b8e2cd38f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf113dcad791018a08ef5987845db36deb0fe68f2fb5633d9e3ef2b8e2cd38f->enter($__internal_9bf113dcad791018a08ef5987845db36deb0fe68f2fb5633d9e3ef2b8e2cd38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_884c1ced753e65df08437021df9a65517f97d826e3c4e8c8dbd990af211b44b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884c1ced753e65df08437021df9a65517f97d826e3c4e8c8dbd990af211b44b4->enter($__internal_884c1ced753e65df08437021df9a65517f97d826e3c4e8c8dbd990af211b44b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_9bf113dcad791018a08ef5987845db36deb0fe68f2fb5633d9e3ef2b8e2cd38f->leave($__internal_9bf113dcad791018a08ef5987845db36deb0fe68f2fb5633d9e3ef2b8e2cd38f_prof);

        
        $__internal_884c1ced753e65df08437021df9a65517f97d826e3c4e8c8dbd990af211b44b4->leave($__internal_884c1ced753e65df08437021df9a65517f97d826e3c4e8c8dbd990af211b44b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
