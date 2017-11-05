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
        $__internal_1e3900dc34dbac56cd8423e832806de28ce7d67afc352e790ebc76ad3d70a292 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3900dc34dbac56cd8423e832806de28ce7d67afc352e790ebc76ad3d70a292->enter($__internal_1e3900dc34dbac56cd8423e832806de28ce7d67afc352e790ebc76ad3d70a292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_46903ff9d94ef5d271ae495ad0ce7a3b59dd8155f9451159c82e52b11c175a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46903ff9d94ef5d271ae495ad0ce7a3b59dd8155f9451159c82e52b11c175a2a->enter($__internal_46903ff9d94ef5d271ae495ad0ce7a3b59dd8155f9451159c82e52b11c175a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_1e3900dc34dbac56cd8423e832806de28ce7d67afc352e790ebc76ad3d70a292->leave($__internal_1e3900dc34dbac56cd8423e832806de28ce7d67afc352e790ebc76ad3d70a292_prof);

        
        $__internal_46903ff9d94ef5d271ae495ad0ce7a3b59dd8155f9451159c82e52b11c175a2a->leave($__internal_46903ff9d94ef5d271ae495ad0ce7a3b59dd8155f9451159c82e52b11c175a2a_prof);

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
