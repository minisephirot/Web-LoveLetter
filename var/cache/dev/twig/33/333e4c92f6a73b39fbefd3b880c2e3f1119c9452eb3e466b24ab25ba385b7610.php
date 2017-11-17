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
        $__internal_ba3a2d4a8647dfe91c2f58d7c8a6d9e19988e0a8a872f1789ce9bcb40c64eac5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba3a2d4a8647dfe91c2f58d7c8a6d9e19988e0a8a872f1789ce9bcb40c64eac5->enter($__internal_ba3a2d4a8647dfe91c2f58d7c8a6d9e19988e0a8a872f1789ce9bcb40c64eac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_6302ee7e8fe66dae2dafc37ecdcc39cb583b35af239a6e40b301e88f58f816cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6302ee7e8fe66dae2dafc37ecdcc39cb583b35af239a6e40b301e88f58f816cf->enter($__internal_6302ee7e8fe66dae2dafc37ecdcc39cb583b35af239a6e40b301e88f58f816cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ba3a2d4a8647dfe91c2f58d7c8a6d9e19988e0a8a872f1789ce9bcb40c64eac5->leave($__internal_ba3a2d4a8647dfe91c2f58d7c8a6d9e19988e0a8a872f1789ce9bcb40c64eac5_prof);

        
        $__internal_6302ee7e8fe66dae2dafc37ecdcc39cb583b35af239a6e40b301e88f58f816cf->leave($__internal_6302ee7e8fe66dae2dafc37ecdcc39cb583b35af239a6e40b301e88f58f816cf_prof);

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
