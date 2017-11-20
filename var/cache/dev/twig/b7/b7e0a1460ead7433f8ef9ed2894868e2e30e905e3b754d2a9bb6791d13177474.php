<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2480d9c1966356beaa1e4edbcac80596a0f5d4c8badf510a5b2e870f134231bc extends Twig_Template
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
        $__internal_d4b185f6fec8427edfa186b93e5bc57785de24a18ac1c41166e9a3dcd529e1af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b185f6fec8427edfa186b93e5bc57785de24a18ac1c41166e9a3dcd529e1af->enter($__internal_d4b185f6fec8427edfa186b93e5bc57785de24a18ac1c41166e9a3dcd529e1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_596026f5dca30e93722d43017f43630655e5b8bcdbd28bfdf92960499d851a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596026f5dca30e93722d43017f43630655e5b8bcdbd28bfdf92960499d851a0b->enter($__internal_596026f5dca30e93722d43017f43630655e5b8bcdbd28bfdf92960499d851a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d4b185f6fec8427edfa186b93e5bc57785de24a18ac1c41166e9a3dcd529e1af->leave($__internal_d4b185f6fec8427edfa186b93e5bc57785de24a18ac1c41166e9a3dcd529e1af_prof);

        
        $__internal_596026f5dca30e93722d43017f43630655e5b8bcdbd28bfdf92960499d851a0b->leave($__internal_596026f5dca30e93722d43017f43630655e5b8bcdbd28bfdf92960499d851a0b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
