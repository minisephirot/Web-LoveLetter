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
        $__internal_b09e7fc245e4b4ac1e626544bff56f73ecefe72bce642febd1505a71e2713319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b09e7fc245e4b4ac1e626544bff56f73ecefe72bce642febd1505a71e2713319->enter($__internal_b09e7fc245e4b4ac1e626544bff56f73ecefe72bce642febd1505a71e2713319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_8190fbdd9062fdb4427b24ea7b25ad42dbfa371fd37c966d800cf8f6fae034c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8190fbdd9062fdb4427b24ea7b25ad42dbfa371fd37c966d800cf8f6fae034c9->enter($__internal_8190fbdd9062fdb4427b24ea7b25ad42dbfa371fd37c966d800cf8f6fae034c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b09e7fc245e4b4ac1e626544bff56f73ecefe72bce642febd1505a71e2713319->leave($__internal_b09e7fc245e4b4ac1e626544bff56f73ecefe72bce642febd1505a71e2713319_prof);

        
        $__internal_8190fbdd9062fdb4427b24ea7b25ad42dbfa371fd37c966d800cf8f6fae034c9->leave($__internal_8190fbdd9062fdb4427b24ea7b25ad42dbfa371fd37c966d800cf8f6fae034c9_prof);

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
