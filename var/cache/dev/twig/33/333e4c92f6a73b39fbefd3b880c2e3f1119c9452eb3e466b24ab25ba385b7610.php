<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_6f4ce033039f6c51d9532719449c55d4a4f2c11f37f9fcb7c35eb01a47ee1679 extends Twig_Template
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
        $__internal_a21507d1495c79ae97bb465e66a0b73a4d4dd98e43abd7a31f7e5c893ecd88b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a21507d1495c79ae97bb465e66a0b73a4d4dd98e43abd7a31f7e5c893ecd88b4->enter($__internal_a21507d1495c79ae97bb465e66a0b73a4d4dd98e43abd7a31f7e5c893ecd88b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ed8b68e0b6842f961cfe69972a9c25efa73b5b83726a3273126c9693cc4ce1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed8b68e0b6842f961cfe69972a9c25efa73b5b83726a3273126c9693cc4ce1f7->enter($__internal_ed8b68e0b6842f961cfe69972a9c25efa73b5b83726a3273126c9693cc4ce1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a21507d1495c79ae97bb465e66a0b73a4d4dd98e43abd7a31f7e5c893ecd88b4->leave($__internal_a21507d1495c79ae97bb465e66a0b73a4d4dd98e43abd7a31f7e5c893ecd88b4_prof);

        
        $__internal_ed8b68e0b6842f961cfe69972a9c25efa73b5b83726a3273126c9693cc4ce1f7->leave($__internal_ed8b68e0b6842f961cfe69972a9c25efa73b5b83726a3273126c9693cc4ce1f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
