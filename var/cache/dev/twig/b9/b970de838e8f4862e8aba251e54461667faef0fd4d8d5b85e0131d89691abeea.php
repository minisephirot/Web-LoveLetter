<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_c9a22f6232f523620a43cb73264546a4a7ebf73ef4ae88aaf7169e6d28ddd7bf extends Twig_Template
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
        $__internal_fc6e458ee0605fc50f492db4d73b93a5650faeceff5a82e84c0a4ac435d2a3ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc6e458ee0605fc50f492db4d73b93a5650faeceff5a82e84c0a4ac435d2a3ad->enter($__internal_fc6e458ee0605fc50f492db4d73b93a5650faeceff5a82e84c0a4ac435d2a3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_81cde4ee57056683e5bb5159e6f8e1c8b08da4704719128f34c839eb4709a2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81cde4ee57056683e5bb5159e6f8e1c8b08da4704719128f34c839eb4709a2f9->enter($__internal_81cde4ee57056683e5bb5159e6f8e1c8b08da4704719128f34c839eb4709a2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_fc6e458ee0605fc50f492db4d73b93a5650faeceff5a82e84c0a4ac435d2a3ad->leave($__internal_fc6e458ee0605fc50f492db4d73b93a5650faeceff5a82e84c0a4ac435d2a3ad_prof);

        
        $__internal_81cde4ee57056683e5bb5159e6f8e1c8b08da4704719128f34c839eb4709a2f9->leave($__internal_81cde4ee57056683e5bb5159e6f8e1c8b08da4704719128f34c839eb4709a2f9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
