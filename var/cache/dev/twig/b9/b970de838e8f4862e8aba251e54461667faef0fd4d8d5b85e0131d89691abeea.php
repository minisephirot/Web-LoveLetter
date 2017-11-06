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
        $__internal_d3478814c930bb4ba839aa0ad84f4fd2dd1811a75ee4c889f29f287d7281fdba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3478814c930bb4ba839aa0ad84f4fd2dd1811a75ee4c889f29f287d7281fdba->enter($__internal_d3478814c930bb4ba839aa0ad84f4fd2dd1811a75ee4c889f29f287d7281fdba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_607900a4894e277770a16f346c575c5c8ec8dff1c3ecb889998ebf2c226e23d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607900a4894e277770a16f346c575c5c8ec8dff1c3ecb889998ebf2c226e23d2->enter($__internal_607900a4894e277770a16f346c575c5c8ec8dff1c3ecb889998ebf2c226e23d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d3478814c930bb4ba839aa0ad84f4fd2dd1811a75ee4c889f29f287d7281fdba->leave($__internal_d3478814c930bb4ba839aa0ad84f4fd2dd1811a75ee4c889f29f287d7281fdba_prof);

        
        $__internal_607900a4894e277770a16f346c575c5c8ec8dff1c3ecb889998ebf2c226e23d2->leave($__internal_607900a4894e277770a16f346c575c5c8ec8dff1c3ecb889998ebf2c226e23d2_prof);

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
