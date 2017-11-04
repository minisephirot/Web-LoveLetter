<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d5733cf16b809f77d7a26f88eb1980e3ea7e0eb69bb2930da0e4f997418905b extends Twig_Template
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
        $__internal_428b9ad200f95fbaf20e1d0048727049eba151bc16ca9fedac2b8d75ea17c6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_428b9ad200f95fbaf20e1d0048727049eba151bc16ca9fedac2b8d75ea17c6f4->enter($__internal_428b9ad200f95fbaf20e1d0048727049eba151bc16ca9fedac2b8d75ea17c6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_f9b5dba637e164b6e12aaab46231836b17b623eb7e54c9f13fec30c61fa08fbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b5dba637e164b6e12aaab46231836b17b623eb7e54c9f13fec30c61fa08fbe->enter($__internal_f9b5dba637e164b6e12aaab46231836b17b623eb7e54c9f13fec30c61fa08fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_428b9ad200f95fbaf20e1d0048727049eba151bc16ca9fedac2b8d75ea17c6f4->leave($__internal_428b9ad200f95fbaf20e1d0048727049eba151bc16ca9fedac2b8d75ea17c6f4_prof);

        
        $__internal_f9b5dba637e164b6e12aaab46231836b17b623eb7e54c9f13fec30c61fa08fbe->leave($__internal_f9b5dba637e164b6e12aaab46231836b17b623eb7e54c9f13fec30c61fa08fbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\WebLoveLetter\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
