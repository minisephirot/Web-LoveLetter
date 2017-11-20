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
        $__internal_dfc6939b31852aa2d8394245df9fc7bd8b019b136945fee82634206cce0e21fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfc6939b31852aa2d8394245df9fc7bd8b019b136945fee82634206cce0e21fb->enter($__internal_dfc6939b31852aa2d8394245df9fc7bd8b019b136945fee82634206cce0e21fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_2a9ea9a7be7681382e6022fa3b4931d340a72d0f818dd29f92da9d5feae9c6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a9ea9a7be7681382e6022fa3b4931d340a72d0f818dd29f92da9d5feae9c6b4->enter($__internal_2a9ea9a7be7681382e6022fa3b4931d340a72d0f818dd29f92da9d5feae9c6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_dfc6939b31852aa2d8394245df9fc7bd8b019b136945fee82634206cce0e21fb->leave($__internal_dfc6939b31852aa2d8394245df9fc7bd8b019b136945fee82634206cce0e21fb_prof);

        
        $__internal_2a9ea9a7be7681382e6022fa3b4931d340a72d0f818dd29f92da9d5feae9c6b4->leave($__internal_2a9ea9a7be7681382e6022fa3b4931d340a72d0f818dd29f92da9d5feae9c6b4_prof);

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
