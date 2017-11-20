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
        $__internal_e8529f7fe420304945cbc832da1eab7fd3bc6a4ff853c1bb6beb773181bab8d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8529f7fe420304945cbc832da1eab7fd3bc6a4ff853c1bb6beb773181bab8d0->enter($__internal_e8529f7fe420304945cbc832da1eab7fd3bc6a4ff853c1bb6beb773181bab8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_4c7058b6f27df3467bb83e98d8250e8699f62055594d1c85e4d4dc6a54a01283 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c7058b6f27df3467bb83e98d8250e8699f62055594d1c85e4d4dc6a54a01283->enter($__internal_4c7058b6f27df3467bb83e98d8250e8699f62055594d1c85e4d4dc6a54a01283_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_e8529f7fe420304945cbc832da1eab7fd3bc6a4ff853c1bb6beb773181bab8d0->leave($__internal_e8529f7fe420304945cbc832da1eab7fd3bc6a4ff853c1bb6beb773181bab8d0_prof);

        
        $__internal_4c7058b6f27df3467bb83e98d8250e8699f62055594d1c85e4d4dc6a54a01283->leave($__internal_4c7058b6f27df3467bb83e98d8250e8699f62055594d1c85e4d4dc6a54a01283_prof);

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
