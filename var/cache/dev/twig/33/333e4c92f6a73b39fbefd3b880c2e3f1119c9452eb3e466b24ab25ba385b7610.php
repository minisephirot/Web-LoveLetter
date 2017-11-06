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
        $__internal_311cf235176af2aa74c184106e2c1ea39a41206867240129a3c3bd4904f0bede = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_311cf235176af2aa74c184106e2c1ea39a41206867240129a3c3bd4904f0bede->enter($__internal_311cf235176af2aa74c184106e2c1ea39a41206867240129a3c3bd4904f0bede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_cd81080a4e85470a07be7237f9fcf84f44c3a91a8050b782bdfc0cc90ea7d115 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd81080a4e85470a07be7237f9fcf84f44c3a91a8050b782bdfc0cc90ea7d115->enter($__internal_cd81080a4e85470a07be7237f9fcf84f44c3a91a8050b782bdfc0cc90ea7d115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_311cf235176af2aa74c184106e2c1ea39a41206867240129a3c3bd4904f0bede->leave($__internal_311cf235176af2aa74c184106e2c1ea39a41206867240129a3c3bd4904f0bede_prof);

        
        $__internal_cd81080a4e85470a07be7237f9fcf84f44c3a91a8050b782bdfc0cc90ea7d115->leave($__internal_cd81080a4e85470a07be7237f9fcf84f44c3a91a8050b782bdfc0cc90ea7d115_prof);

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
