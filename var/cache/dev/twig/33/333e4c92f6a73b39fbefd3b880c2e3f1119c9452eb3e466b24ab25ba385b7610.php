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
        $__internal_f79fd8e97947611eb31709877fb6f0fb4698a8d20e7f0fd7a03aca649d0d88ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79fd8e97947611eb31709877fb6f0fb4698a8d20e7f0fd7a03aca649d0d88ee->enter($__internal_f79fd8e97947611eb31709877fb6f0fb4698a8d20e7f0fd7a03aca649d0d88ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_4ab2b4e73f667ac9710d36eea7a6d77774269bacb13020acccd986768cb7119c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab2b4e73f667ac9710d36eea7a6d77774269bacb13020acccd986768cb7119c->enter($__internal_4ab2b4e73f667ac9710d36eea7a6d77774269bacb13020acccd986768cb7119c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f79fd8e97947611eb31709877fb6f0fb4698a8d20e7f0fd7a03aca649d0d88ee->leave($__internal_f79fd8e97947611eb31709877fb6f0fb4698a8d20e7f0fd7a03aca649d0d88ee_prof);

        
        $__internal_4ab2b4e73f667ac9710d36eea7a6d77774269bacb13020acccd986768cb7119c->leave($__internal_4ab2b4e73f667ac9710d36eea7a6d77774269bacb13020acccd986768cb7119c_prof);

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
